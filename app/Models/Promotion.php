<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory, HasImage;

    public $fillable = [
        "title", "details", "valid_until", "is_active",
        "cashback", "discount_percentage", "discount_value"
    ];
}
