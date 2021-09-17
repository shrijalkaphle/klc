<?php

namespace App\Http\Controllers;

use App\Models\Blogs;

use Illuminate\Http\Request;

class ImageController extends Controller {
    public function upload(Request $request) {
        $blog = new Blogs();
        $blog->id = 0;
        $blog->exists = true;
        $image = $blog->addMediaFromRequest('upload')->toMediaCollection('blogs');
        return response()->json([
            'url' => $image->getUrl()
        ]);
    }
}


