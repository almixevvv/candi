<?php

namespace App\Http\Controllers\Backend;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form\Promotion\PromotionCreateForm;
use App\Http\Requests\PromotionCreationRequest;

class PromotionController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.promotions.index');
        $this->contextData = [
            'title' => 'Promotions'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->contextData['promotions'] = Promotion::with('image')->paginate(config('app.pagination_count'));

        return view('cms.promotions.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new PromotionCreateForm([
            "action" => route('cms.promotions.store'),
            "method" => "POST",
            "extra" => [
                "wysiwyg" => true
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromotionCreationRequest $request)
    {
        $promotion = Promotion::create($request->except('_token', 'image'));

        if ($request->file('image')) {
            $promotion->addImage($request->file('image'));
        }

        $this->message('success', "Promotion has been created.");

        return redirect($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        $this->contextData['form'] = new PromotionCreateForm([
            "action" => route('cms.promotions.update', $promotion),
            "method" => "PUT",
            "extra" => [
                "wysiwyg" => true,
                "helpText" => "You will replace the image if you upload a new image"
            ],
            "data" => [
                "title" => $promotion->title,
                "details" => $promotion->details,
                "valid_until" => $promotion->valid_until,
                "cashback" => $promotion->cashback,
                "discount_percentage" => $promotion->discount_percentage,
                "discount_value" => $promotion->discount_value,
                "details" => $promotion->details,
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromotionCreationRequest $request, Promotion $promotion)
    {
        $promotion->update($request->except('_token', '_method', 'image'));

        if ($request->file('image')) {
            $promotion->removeAllImage();
            $promotion->addImage($request->file('image'));
        }

        $this->message('success', 'Promotion has been updated.');

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        $promotion->removeAllImage();
        $this->message('success', 'Promotion has been deleted.');

        return redirect($this->index);
    }
}
