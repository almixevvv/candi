<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    use HasFactory;

    public $fillable = ["model_name", "model_id", "title", "description", "robots", "keywords", "canonical"];
}
