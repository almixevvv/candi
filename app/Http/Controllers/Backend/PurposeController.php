<?php

namespace App\Http\Controllers\Backend;

use App\Form\Purpose\PurposeCreateForm;
use App\Models\Purpose;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurposeController extends Controller
{
    public function __construct()
    {
        $this->index = route('cms.purposes.index');
        $this->contextData = [
            'title' => 'Purpose'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purposes = Purpose::paginate(config('app.pagination_limit'));

        $this->contextData['purposes'] = $purposes;
        return view('cms.purposes.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new PurposeCreateForm([
            "action" => route('cms.purposes.store'),
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
            "name" => "required"
        ]);

        Purpose::create($request->except('_token'));
        $this->message('success', 'Create Success.');

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
    public function edit(Purpose $purpose)
    {
        $this->contextData['form'] = new PurposeCreateForm([
            "action" => route('cms.purposes.update', $purpose),
            "method" => "PUT",
            "data" => [
                "name" => $purpose->name
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
    public function update(Request $request, Purpose $purpose)
    {
        $this->validate($request, [
            "name" => "required"
        ]);

        $purpose->update($request->only('name'));

        $this->message('success', 'Update Success.');

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purpose $purpose)
    {
        $purpose->delete();
        $this->message('success', 'Delete success.');

        return redirect($this->index);
    }
}
