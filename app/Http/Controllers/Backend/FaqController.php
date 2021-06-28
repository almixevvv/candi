<?php

namespace App\Http\Controllers\Backend;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Form\Faq\FaqCreateForm;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.faq.index');
        $this->contextData = [
            'title' => 'FAQ'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->contextData['faqs'] = Faq::orderBy('position')->paginate(config('app.pagination_limit'));

        return view('cms.faq.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new FaqCreateForm([
            "action" => route('cms.faq.store'),
            "method" => "POST"
        ]);

        return view('cms.base_form', $this->contextData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "question" => "required",
            "answer" => "required",
            "position" => "required"
        ]);

        (new Faq)->rearrangePosition($request->position);

        Faq::create($request->except('_token', '_method'));

        return redirect($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        $this->contextData['form'] = new FaqCreateForm([
            "action" => route('cms.faq.update', $faq),
            "method" => "PUT",
            "data" => [
                "question" => $faq->question,
                "answer" => $faq->answer,
                "position" => $faq->position
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $this->validate($request, [
            "question" => "required",
            "answer" => "required",
            "position" => "required",
        ]);

        (new Faq)->rearrangePosition($request->position);

        $faq->update($request->except('_token', '_method'));

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect($this->index);
    }
}
