<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingTag extends Model
{
    use HasFactory;

    public $fillable = ["category_id", "name"];

    public function listings() 
    {
        return $this->belongsToMany(Listing::class, "listing_has_tags", "listing_tag_id", "listing_id");
    }

    public function category() 
    {
        return $this->belongsTo(ListingTagCategory::class, "id", "category_id");
    }
}
