<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingRating extends Model
{
    use HasFactory;

    public $fillable = [
        "listing_id",
        "listing_rating_category_id",
        "rating"
    ];

    public function category() 
    {
        return $this->belongsTo(ListingRatingCategory::class, "listing_rating_category_id", "id");
    }

    public function listings() 
    {
        return $this->belongsTo(Listing::class);
    }
}
