<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request["url"] = "/storage/" .Storage::put('images', $request->file('file'));
        $images = Image::create($request->all());

        return redirect()->route('admin.images.index')->with('msg','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Image $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('admin.images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('admin.images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $request["url"] = Storage::put('images', $request->file('file'));
        $image = Image::create($request->all());

        $request->validate([

            'name' => 'required|min:10',
            'slug' => 'required|unique:images',
            'descripcion' => 'required|min:50',
            'file' => 'required|image'

        ]);

        return redirect()->route('admin.images.edit', $image)->with('info', 'Se ha actualizado la imagen correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->route('admin.images.index')->with('eliminar','ok');
    }
}
