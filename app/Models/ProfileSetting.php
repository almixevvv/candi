<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    use HasFactory;

    public $fillable = ["address", "phone_number", "email", "open_day_range", "open_hour_range", "facebook", "instagram", "twitter","maps"];
}
