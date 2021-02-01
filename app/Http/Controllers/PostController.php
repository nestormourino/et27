<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use App\Models\Materia;

class PostController extends Controller
{
    public function index(){
        /* $posts = Post::all(); */
        $posts = Post::where('status', 1)->where('materia_id', 71)->latest('id')->paginate(3);
        $categories = Category::where('id','!=',7)->get();
        $images = Image::all();

        return view('index', compact('posts', 'categories', 'images'));
    }
    public function anuncios(){
        $category = Category::where('id',7)->first();
        $materia = Materia::where('category_id',$category->id)->first();
        $posts = Post::where('status', 1)->where('materia_id', "=", $materia->id)->latest('id')->paginate(6);

        return view('anuncios', compact('posts'));
    }
    public function show(Post $post){

        $similares = Post::where('materia_id', $post->materia_id)
                            ->where('status', 1)
                            ->where('id','!=', $post->id)
                            ->latest('id')
                            ->take(4)
                            ->get();
        
        return view('post.show',compact('post', 'similares'));
    }
}
