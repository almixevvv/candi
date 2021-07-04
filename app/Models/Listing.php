<?php

namespace App\Models;

use App\Traits\HasImage;
use App\Traits\HasMetadata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory, HasImage, HasMetadata;

    public $fillable = ["title", "details", "address", "lat", "long", "low_price", "high_price", 'category_id'];

    public function category() 
    {
        return $this->belongsTo(ListingCategory::class);
    }

    public function tags() 
    {
        return $this->belongsToMany(ListingTag::class, "listing_has_tags", "listing_id", "listing_tag_id");
    }
}
