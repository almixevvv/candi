<?php

namespace App\Models;

use App\Traits\HasImage;
use App\Traits\HasPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory, HasImage, HasPosition;

    public $fillable = ["position", "title", "button_url", "button_text", "has_search"];

    public $casts = [
        "has_search" => "boolean"
    ];
}
