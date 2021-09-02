<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use App\Models\FrontendMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form\Banner\BannerCreateForm;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->index = route('cms.banners.index');
        $this->contextData = [
            'title' => 'Banner'
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
            data: Banner::with('image')->orderBy('position')->paginate(config('app.paginator_count')),
            title: ["Image", "Title", "Button Text", "Button Url", "Has Search", "Position"],
            fields: ["image.image_url|image", "title", "button_text", "button_url", "has_search|boolean", "position"],
            path: "banners",
            hasDetail: false
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
        $this->contextData['form'] = new BannerCreateForm([
            "method" => "POST",
            "action" => route('cms.banners.store')
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
            "image" => "required|image",
            "position" => "required|numeric",
            "title" => "required",
            "button_url" => "url|nullable",
            "has_search" => "required",
        ]);

        (new Banner)->preparePosition($request->position);

        $banner = Banner::create($request->except('_token', 'image'));
        $banner->addImage($request->file('image'));

        $this->message('success', 'Banner has been created.');

        return redirect($this->index);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        $this->contextData['form'] = new BannerCreateForm([
            "method" => "PUT",
            "action" => route('cms.banners.update', $banner),
            "data" => [
                "position" => $banner->position,
                "title" => $banner->title,
                "button_text" => $banner->button_text,
                "button_url" => $banner->button_url,
                "has_search" => $banner->has_search,
            ],
            "extra" => [
                "helpText" => "You will replace the image if you upload a new image"
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
    public function update(Request $request, Banner $banner)
    {
        $this->validate($request, [
            "image" => "image",
            "position" => "required|numeric",
            "title" => "required",
            "button_url" => "url|nullable",
            "has_search" => "required",
        ]);

        $banner->preparePosition($request->position, $banner->id);
        $banner->update($request->except('_token', 'image'));

        if ($request->file('image')) {
            $banner->removeAllImage();
            $banner->addImage($request->file('image'));
        }

        $this->message('success', 'Banner has been updated.');

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        $this->message('success', 'Banner has been deleted.');

        return redirect($this->index);
    }
}
