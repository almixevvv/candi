<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whoarewe extends Model
{
    use HasFactory;

    protected $casts = [
        'contents'  => 'array'
    ];

    protected $table = 'g_whoarewes';
}
