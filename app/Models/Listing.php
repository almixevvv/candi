<?php

namespace App\Models;

use App\Traits\HasImage;
use App\Traits\HasMetadata;
use App\Traits\HasPosition;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Listing extends Model
{
    use HasFactory, HasImage, HasMetadata;

    public $fillable = [
        "title", "details", "address", "lat", "long", "low_price",
        "high_price", 'category_id', 'image_360_url', 'top_destination',
        'phone_number', 'website', 'is_active', 'slug'
    ];

    public function category() 
    {
        return $this->belongsTo(ListingCategory::class);
    }

    public function tags() 
    {
        return $this->belongsToMany(ListingTag::class, "listing_has_tags", "listing_id", "listing_tag_id");
    }

    public function ratings() 
    {
        return $this->hasMany(ListingRating::class);
    }

    public function faqs() 
    {
        return $this->hasMany(Faq::class);
    }

    public function scopegetTopDestinations($query) 
    {
        return $query->with('category', 'tags', 'image')->where('is_active', true)->where('top_destination', true)->get();
    }

    public function uploadImage360(UploadedFile $file) 
    {
        // remove 360 image if exists
        if ($this->image_360_url) {
            $this->removeImage360();
        }

        $today = now();
        $dateTimeStamp = collect([$today->year, $today->month, $today->day])->join("/");
        $fileName = Image::generateImageRandomName($file->getClientOriginalName());

        $storagePath = storage_path(collect(["app", "public", "Listing", $dateTimeStamp, "360_image"])->join("/"));
        $filePath = collect(['Listing', $dateTimeStamp, "360_image"])->join("/");

        File::ensureDirectoryExists($storagePath);
        $file->move($storagePath, $fileName);

        $this->image_360_url = "{$filePath}/{$fileName}";
        $this->save();
    }

    public function removeImage360() 
    {
        if (Storage::exists("public/{$this->getRawOriginal('image_360_url')}")) {
            Storage::delete("public/{$this->getRawOriginal('image_360_url')}");
        }

        $this->image_360_url = null;
        $this->save();
    }
}
