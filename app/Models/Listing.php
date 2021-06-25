<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function category() 
    {
        return $this->belongsTo(ListingCategory::class, "id", "category_id");
    }

    public function tags() 
    {
        return $this->belongsToMany(ListingHasTag::class);
    }
}
