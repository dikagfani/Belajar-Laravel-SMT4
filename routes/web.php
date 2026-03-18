<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return 'HALO SEMUNYA!!';
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/well', function() {return view('welcome');});
Route::get('/posts', [PostController::class, 'index'])->name('post');
Route::get('/posts/{id}', [PostController::class, 'detail'])->name('post.detail');