<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request){

        $path = Storage::put('images', $request->file('upload'));

        return ['url' => Storage::url($path)];

    }
}
