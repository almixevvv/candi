<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WhoWeAre extends Model
{
    use HasFactory, HasImage;

    protected $fillable = ["contents"];
}
