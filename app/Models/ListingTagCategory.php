<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingTagCategory extends Model
{
    use HasFactory;

    public $fillable = ["name"];

    public function tags() 
    {
        return $this->hasMany(ListingTag::class, "category_id", "id");
    }
}
