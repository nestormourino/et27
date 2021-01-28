<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Materia;
use App\Models\Area;
use App\Models\Category;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();

        return view('admin.materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::pluck('name', 'id');
        $areas = Area::pluck('name', 'id');
        return view('admin.materias.create', compact('categories', 'areas'));
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
            'slug' => 'required|unique:materias',
            'category_id' => 'required',
            'area_id' => 'required'

        ]);

        $materia = Materia::create($request->all());
        return redirect()->route('admin.materias.index')->with('msg','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        return view('admin.materias.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        $categories = Category::pluck('name', 'id');
        $areas = Area::pluck('name', 'id');
        return view('admin.materias.edit', compact('materia', 'categories', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $request->validate([

            'name' => 'required',
            'slug' => 'required|unique:materias',
            'category_id' => 'required',
            'materia_id' => 'required'

        ]);

        $materia->update($request->all());

        return redirect()->route('admin.materias.index')->with('msg','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('admin.materias.index')->with('msg','deleted');
    }
}