<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingCategory extends Model
{
    use HasFactory, HasImage;

    public $fillable = ["name"];
  
    protected $attributes = [
        'created_at'    => date("Y-m-d H:i:s")
    ];

    public function listings() 
    {
        return $this->hasMany(Listing::class, "category_id", "id");
    }
}
