<?php

namespace App\Http\Controllers;

use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class WhoareweController extends Controller
{
    public function index(Request $request)
    {
        $content = WhoWeAre::first()->contents;

        return view('front.whoweare.index', [
            'request'   => $request,
            'content'   => $content,
            'pageName'  => 'Who are we'
        ]);
    }

    public function show()
    {
        $modelContent = Whoarewe::latest('created_at')->first();

        return view('cms.waw.index', [
            'content'   => $modelContent,
            'pageName'  => 'Who are we'
        ]);
    }
    public function fetch()
    {
        $modelContent = Whoarewe::all();

        return response()->json([
            'success'   => 1,
            'data'      => $modelContent
        ]);
    }

    public function post()
    {
        $data = new Whoarewe();

        $data->contents = request('contents');

        $data->save();

        return response()->json([
            'success'   => 1,
        ]);
    }
}
