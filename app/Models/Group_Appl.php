<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_Appl extends Model
{
    use HasFactory;

    protected $table = 's_group_appl';

    protected $casts = [
        'ROLE'  => 'array'
    ];
}
