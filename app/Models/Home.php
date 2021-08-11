<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public $fillable = [
        "top_destination", "sub_top_destination", "featured_blog", "sub_featured_blog",
        "instagram_head", "sub_instagram_head", "instagram_widget_url"
    ];
}
