<?php

namespace App\Models;

use App\Traits\HasImage;
use App\Traits\HasMetadata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, HasImage, HasMetadata;

    public $fillable = ["title", "content", "category_id", 'is_featured', 'slug'];

    public function category() 
    {
        return $this->belongsTo(BlogCategory::class, "category_id", "id");
    }
}
