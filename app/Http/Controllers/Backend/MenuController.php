<?php

namespace App\Http\Controllers\Backend;

use App\Form\FrontendMenu\FrontendMenuCreateForm;
use App\Models\FrontendMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.menus.index');
        $this->contextData = [
            'title' => 'Menu'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->contextData['table'] = $this->getBaseTableContextData(
            data: FrontendMenu::with('page', 'category')->paginate(config('app.pagination_limit')),
            title: ["Category", "Name", "Page"],
            fields: ["category.name", "name", "page.title"],
            path: "menus",
            hasDetail: true
        );

        return view('cms.base_table', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new FrontendMenuCreateForm([
            "method" => "POST",
            "action" => route('cms.menus.store')
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
            "name" => "required",
            "frontend_menu_category_id" => "required",
            "page_id" => "required|unique:frontend_menus,page_id"
        ]);

        FrontendMenu::create($request->except('_token'));

        $this->message('success', 'Menu has been created.');

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
    public function edit(FrontendMenu $menu)
    {
        $this->contextData['form'] = new FrontendMenuCreateForm([
            "method" => "PUT",
            "action" => route('cms.menus.update', $menu),
            "data" => [
                "name" => $menu->name,
                "page_id" => $menu->page_id,
                "frontend_menu_category_id" => $menu->frontend_menu_category_id
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
    public function update(Request $request, FrontendMenu $menu)
    {
        $this->validate($request, [
            "name" => "required",
            "frontend_menu_category_id" => "required",
            "page_id" => "required|unique:frontend_menus,page_id,{$menu->id}"
        ]);

        $menu->update($request->except('_token', '_method'));
        $this->message('success', 'Menu has been updated.');
        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontendMenu $menu)
    {
        $menu->delete();

        $this->message('success', 'Menu has been deleted.');

        return redirect($this->index);
    }
}
