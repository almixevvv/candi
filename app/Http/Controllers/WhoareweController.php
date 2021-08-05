<?php

namespace App\Http\Controllers;

use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class WhoareweController extends Controller
{
    public function index()
    {
        $whoWeAre = WhoWeAre::with('metadata')->first();

        return view('front.whoweare.index', [
            'whoweare' => $whoWeAre,
            'content' => $whoWeAre->contents,
            'pageName' => 'Who are we'
        ]);
    }
}
