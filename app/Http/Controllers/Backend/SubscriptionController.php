<?php

namespace App\Http\Controllers\Backend;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form\Subscription\SubscriptionFilterForm;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->index = route('cms.subscriptions.index');
        $this->contextData = [
            'title' => 'Subscription'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $form = new SubscriptionFilterForm([
            "method" => "GET",
            "action" => $this->index
        ]);

        $this->contextData['subscriptions'] = $form->filter($request);
        $this->contextData['modalForm'] = $form;

        return view('cms.subscriptions.index', $this->contextData);
    }

    public function destroy($id) 
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->delete();

        return redirect($this->index);
    }
}
