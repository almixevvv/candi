<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingTag extends Model
{
    use HasFactory;

    public function listings() 
    {
        return $this->belongsToMany(ListingHasTag::class);
    }

    public function categories() 
    {
        return $this->belongsTo(ListingTagCategory::class, "id", "category_id");
    }
}
