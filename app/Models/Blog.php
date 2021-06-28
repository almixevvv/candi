<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, HasImage;

    public $fillable = ["title", "content", "category_id"];

    public function category() 
    {
        return $this->belongsTo(BlogCategory::class, "category_id", "id");
    }
}
