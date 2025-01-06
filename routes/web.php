<?php

use App\Models\Post;
use App\Models\Category;
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
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


//ambil semua kategori
Route::get('/categories', function()
{
    return view('/categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

//ambil satu kategori
Route::get('/categories/{category:slug}', function(Category $category)
{
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category'=> $category->name
    ]);
});
