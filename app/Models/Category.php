<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //
    protected $guarded = ['id'];

    protected function posts()
    {
        return $this->hasMany(Post::class);
    }
}
