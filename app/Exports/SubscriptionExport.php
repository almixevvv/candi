<?php

namespace App\Exports;

use App\Models\Subscription;
use Maatwebsite\Excel\Concerns\FromArray;
use App\Enums\Subscription\SubscriptionStatus;

class SubscriptionExport implements FromArray
{
    /**
    * @return \Illuminate\Support\Array
    */
    public function array(): array
    {
        $subscriptions = Subscription::where('status', SubscriptionStatus::Subscribed)->get();
        $subscriptions = $subscriptions->map(fn($value) => [
            $value->email,
            $value->unsubscribe_url
        ]);

        $data = [["Email", "UnSubscribe Url"]];
        $data[] = $subscriptions->toArray();
        return $data;
    }
}
