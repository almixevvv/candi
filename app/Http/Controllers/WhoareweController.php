<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whoarewe;

class WhoareweController extends Controller
{
    public function index()
    {
        $modelContent = Whoarewe::latest('created_at')->first();

        return view('front.whoweare.index', [
            'content'   => $modelContent,
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
