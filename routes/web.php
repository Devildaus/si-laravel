<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use PharIo\Manifest\Author;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
        "posts" => Post::latest()->where('category_id', 2)->paginate(3)->withQueryString(),
        "posts2" => Post::latest()->where('category_id', 1)->paginate(3)->withQueryString()
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Firdaus",
        "email" => "wow@gmail.com",
        "image" => "image.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);



//Halaman Single post

Route::get('/posts/{post:slug}', [PostController::class, 'show']);


//category binding
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
