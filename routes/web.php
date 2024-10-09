<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing', function () {
    return view('testing');
})->name('test.jer.bang');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {

    $posts = Post::with('user')->get();
    return view('home', compact('posts'));
})->name('home')->middleware('auth');

Route::get('/post/create', [PostController::class, 'create'])->name('post.create')->middleware('auth');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
