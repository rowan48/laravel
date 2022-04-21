<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //== require
use App\Http\Controllers\CommentController; //== require


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
Route::get('/',[PostController::class,'index'])->name('posts.index');
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create/', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::post('/posts/{post}/comment', [CommentController::class, 'comment'])->name('posts.comment');
Route::put('/posts/{posts}', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::delete('/posts/delete/{post}', [PostController::class, 'destory'])->name('posts.destory');
Route::post('/posts/{post}/comments', [CommentController::class, 'comment'])->name('posts.comment');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');




