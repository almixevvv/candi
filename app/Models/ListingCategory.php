<?php

namespace App\Models;

use App\Traits\HasImage;
use App\Traits\HasPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingCategory extends Model
{
    use HasFactory, HasImage, HasPosition;

    public $fillable = ["name", "position"];
  
    protected $casts = [
        'created_at' => "date"
    ];

    public function listings() 
    {
        return $this->hasMany(Listing::class, "category_id", "id");
    }
}
