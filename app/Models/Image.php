<?php

namespace App\Models;

use App\Casts\ImageCast;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image as ImageResizer;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    public $fillable = ["model_name", "model_id", "image_url", "image_thumbnail", "is_temporary", "metadata"];

    public $casts = [
        "metadata" => "object",
        "image_url" => ImageCast::class,
        "image_thumbnail" => ImageCast::class
    ];

    public static function generateImageRandomName(string $imageName): string
    {
        return md5(uniqid(rand(), true)) . "_" . $imageName;
    }

    public static function uploadImage(UploadedFile $file, string $uploadTo, array $metadata = [], bool $isTemporary = true, array $extra = []) : Image
    {
        $today = now();

        $dateTimeStamp = collect([$today->year, $today->month, $today->day])->join("/");

        if ($isTemporary) {
            $storagePath = collect(["app", "public", "tmp", $uploadTo, $dateTimeStamp])->join("/");
            $filePath = collect(["tmp", $uploadTo, $dateTimeStamp])->join("/");
        } else {
            $storagePath = collect(["app", "public", $uploadTo, $dateTimeStamp])->join("/");
            $filePath = collect([$uploadTo, $dateTimeStamp])->join("/");
        }

        $storagePath = storage_path($storagePath);

        $fileName = Image::generateImageRandomName($file->getClientOriginalName());
        $thumbnailName = collect(explode(".", $fileName))->join("_thumbnail.");

        File::ensureDirectoryExists($storagePath);

        $img = ImageResizer::make($file->path());
        $img->resize(800, 800)->save($storagePath . "/" . $fileName, 80);
        $img->resize(100, 100)->save($storagePath . "/" . $thumbnailName, 20);

        $file->move($storagePath, $fileName);

        $id = array_key_exists("id", $extra) ? $extra['id'] : null;
        $name = array_key_exists("name", $extra) ? $extra['id'] : null;

        return Image::create([
            "model_id" => $id,
            "model_name" => $name,
            "image_url" => "{$filePath}/{$fileName}",
            "image_thumbnail" => "{$filePath}/{$thumbnailName}",
            "metadata" => $metadata
        ]);
    }
}
