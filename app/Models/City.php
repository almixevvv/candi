<?php

namespace App\Models;

use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    public $fillable = ['code', 'name', 'province_id'];

    public function province() 
    {
        return $this->belongsTo(Province::class);
    }

    public function districts() 
    {
        return $this->hasMany(District::class);
    }
}
