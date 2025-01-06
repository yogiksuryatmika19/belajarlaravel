<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Yogi Suryatmika",
        "email" => "yogiksuryatmika@gmail.com",
        "gambar" => "yz.jpg"
    ]);
});


//halaman semua post
Route::get('/posts', [PostController::class, 'index']);


//halaman single post
Route::get('/posts/{slug}', [PostController::class, 'show']);