<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Enums\Subscription\SubscriptionStatus;
use Illuminate\Contracts\Encryption\DecryptException;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request) 
    {
        $this->validate($request, [
            "email" => "required|email"
        ]);

        $subscription = Subscription::where("email", $request->email)->first();

        if ($subscription) {
            $subscription->status = SubscriptionStatus::Subscribed;
            $subscription->save();
        } else {
            Subscription::create(["email" => $request->email]);
        }

        return redirect()->route('home');
    }

    public function unsubscribe(Request $request) 
    {
        if (! $request->code) {
            return response("Email not found.", 404);
        }
        try {
            $email = Crypt::decryptString($request->code);
    
            $subscription = Subscription::where('email', $email)->first();
    
            if (!$subscription) {
                return response("Email not found.", 404);
            }
            $subscription->status = SubscriptionStatus::NotSubscribed;
            $subscription->save();

        } catch (Exception $e) {
            return response("Email not found.", 404);
        }

        return response("You've been unsubscribed to newsletter.");
    }
}
