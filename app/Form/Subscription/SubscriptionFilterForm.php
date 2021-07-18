<?php
namespace App\Form\Subscription;

use App\Utils\Database;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Gustiawan\FormBuilder\Form;
use App\Enums\Subscription\SubscriptionStatus;
use Illuminate\Pagination\LengthAwarePaginator;

class SubscriptionFilterForm extends Form
{
    public function handle() 
    {
        $this->text('email', 'Email');
        $this->checkBox('status', 'Status', SubscriptionStatus::asSelectArray());

        $this->separator();
        $this->button('Search', 'btn-secondary');
    }

    public function filter(Request $request): LengthAwarePaginator
    {
        $subscriptions = Subscription::orderBy('id', 'desc');

        if ($request->email) {
            $subscriptions = Database::whereLike($subscriptions, "email", $request->email, true);
        }
        if ($request->status) {
            $subscriptions = $subscriptions->whereIn('status', $request->status);
        }

        return $subscriptions->paginate(config('app.pagination_limit'));
    }
}
