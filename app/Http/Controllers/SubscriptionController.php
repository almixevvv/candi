<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Enums\Subscription\SubscriptionStatus;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request) 
    {
        $this->validate($request, [
            "email" => "required|email|unique:subscriptions,email"
        ], [
            "unique" => "You already subscribed."
        ]);

        Subscription::create(["email" => $request->email]);

        return redirect()->route('home');
    }

    public function unsubscribe(Request $request) 
    {
        if (! $request->email) {
            return "No Email Found.";
        }

        $subscription = Subscription::where('email', $request->email)->first();

        if (!$subscription) {
            return "No Email Found.";
        }

        $subscription->status = SubscriptionStatus::NotSubscribed;
        $subscription->save();

        return "You've been unsubscribed to newsletter.";
    }
}
