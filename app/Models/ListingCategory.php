<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingCategory extends Model
{
    use HasFactory;

    protected $attributes = [
        'created_at'    => date("Y-m-d H:i:s")
    ];

    public function listings() 
    {
        return $this->hasMany(Listing::class, "category_id", "id");
    }
}
