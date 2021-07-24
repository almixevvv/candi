<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingRatingCategory extends Model
{
    use HasFactory;

    public $fillable = ["name"];
}
