<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingGallery extends Model
{
    use HasFactory, HasImage;

    public $fillable = ["listing_id"];

    public function listing() 
    {
        return $this->belongsTo(Listing::class);
    }
}
