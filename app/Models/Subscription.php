<?php

namespace App\Models;

use App\Enums\Subscription\SubscriptionStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public $fillable = ['email', 'status'];

    public $casts = [
        "status" => SubscriptionStatus::class
    ];
}
