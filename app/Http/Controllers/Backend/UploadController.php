<?php

namespace App\Http\Controllers\Backend;

use App\Models\Image;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class UploadController extends Controller
{
    public function editorImageUpload(Request $request) 
    {
        $image = Image::uploadImage($request->file('upload'), $request->uploadTo, [], false);

        $cacheKey = url()->previous() . ":image_ids";
        $imageIds = Cache::get($cacheKey);
        $imageIds[] = $image->id;
        Cache::put($cacheKey, $imageIds, 86400); // 24 hours
        return response()->json([
            "uploaded" => true,
            "url" => $image->image_url
        ]);
    }
}
