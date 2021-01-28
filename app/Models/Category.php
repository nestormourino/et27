<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion 1:n
    public function materia(){
        return $this->hasMany(Materia::class);
    }

    //Relacion 1:N a traves de una tabla intermedia

    public function posts()
    {
        return $this->hasManyThrough(Post::class, Materia::class);
    }

}
