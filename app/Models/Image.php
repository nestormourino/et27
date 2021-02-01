<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user_creator()
    {
        return $this->belongsTo(User::class);
    }

    public function user_editor()
    {
        return $this->belongsTo(User::class);
    }
}
