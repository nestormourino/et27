<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
        return view('admin.areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'slug' => 'required|unique:areas',

        ]);

        $area = Area::create($request->all());
        return redirect()->route('admin.areas.index')->with('info', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Area $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        return view('admin.areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Area $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        return view('admin.areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Area $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([

            'name' => 'required',
            'slug' => 'required|unique:areas',

        ]);

        $area->update($request->all());

        return redirect()->route('admin.areas.edit', $area)->with('info', 'Se ha actualizado el area.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Area $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('admin.areas.index')->with('eliminar','ok');
    }
}
