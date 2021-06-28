<?php
namespace App\Traits;

use Exception;
use ReflectionClass;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use Intervention\Image\Facades\Image as ImageResizer;

trait HasImage 
{
    public function getModelName(): string
    {
        return (new ReflectionClass($this))->getName();
    }

    public function getModelShortName(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }

    public function getImageRandomName(string $imageName): string
    {
        return md5(uniqid(rand(), true)) . "_" . $imageName;
    }

    public function getImages(array $metadata = []): Collection
    {
        $id = $this->id;
        $name = $this->getModelName();
        $images = Image::where('model_name', $name)->where('model_id', $id);

        if ($metadata) {
            foreach ($metadata as $field => $value) {
                $like_value = "%" . '"' . $field . '":' . $value . "%";
                $images = $images->where('metadata', "LIKE", $like_value);
            }
        }

        return $images->get();
    }

    public function addImage(UploadedFile $file, array $metadata = []) : Image
    {
        return Image::uploadImage($file, $this->getModelShortName(), $metadata, false, [
            "id" => $this->id,
            "name" => $this->getModelName()
        ]);
    }

    public function attach(Image $image) 
    {
        $new_image_url = "public/". Str::replace("tmp/", "", $image->getRawOriginal('image_url'));
        $new_image_thumbnail = "public/". Str::replace("tmp/", "", $image->getRawOriginal('image_thumbnail'));

        if (! Storage::exists("public/{$image->getRawOriginal('image_url')}")) {
            throw new Exception("File not found.");
        }

        if (! Storage::exists("public/{$image->getRawOriginal('image_thumbnail')}")) {
            throw new Exception("File not found.");
        }

        Storage::move("public/{$image->getRawOriginal('image_url')}", $new_image_url);
        Storage::move("public/{$image->getRawOriginal('image_thumbnail')}", $new_image_thumbnail);

        $image->model_name = $this->getModelName();
        $image->model_id = $this->id;
        $image->is_temporary = false;
    }

    public function attachImages(Collection $images) 
    {
        foreach ($images as $image) {
            $this->attach($image);
        }

        return $this;
    }

    public function removeImage($image) 
    {
        $name = $this->getModelName();
        if (is_int($image)) {
            Image::where('model_name', $name)->where('id', $image)->delete();
        } else {
            $image->delete();
        }
    }

    public function removeAllImage() 
    {
        $name = $this->getModelName();
        $image = Image::where('model_name', $name);
        $images = $image->get();
        foreach ($images as $img) {
            if (Storage::exists("public/{$img->getRawOriginal('image_url')}")) {
                Storage::delete("public/{$img->getRawOriginal('image_url')}");
            }
            if (Storage::exists("public/{$img->getRawOriginal('image_thumbnail')}")) {
                Storage::delete("public/{$img->getRawOriginal('image_thumbnail')}");
            }
        }

        $image->delete();
    }
}
