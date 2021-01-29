<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Materia;
use App\Models\Post;

class CategoryController extends Controller
{
    
    public function show(Category $category){

        $materias = Materia::where('category_id', $category->id)->get();

        $posts = ($category->posts)->sortBy('updated_at')->take(3);
        
        return view('category.show',compact('category','materias', 'posts'));
    }

    public function list(Category $category){

        $posts = collect($category->posts)->sortBy('updated_at')->paginate(6);
        
        return view('category.list',compact('category', 'posts'));
    }
}
