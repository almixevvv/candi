<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;

    public $fillable = ['code', 'name'];

    public function cities() 
    {
        return $this->hasMany(City::class);
    }
}
