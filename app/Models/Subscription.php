<?php

namespace App\Models;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Subscription\SubscriptionStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

    public $fillable = ['email', 'status'];

    public $casts = [
        "status" => SubscriptionStatus::class
    ];

    public function getUnSubscribeUrlAttribute() 
    {
        $unsubscribe_code = Crypt::encryptString($this->email);
        return route('subscriptions.unsubscribe')."?code={$unsubscribe_code}";
    }
}
