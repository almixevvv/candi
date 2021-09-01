<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    public $fillable = ['code', "name", 'city_id'];

    public function city() 
    {
        return $this->belongsTo(City::class);
    }
}
