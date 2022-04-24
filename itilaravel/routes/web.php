<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //== require
use App\Http\Controllers\CommentController; //== require
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;





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
Route::get('/',[PostController::class,'index'])->name('posts.index')->middleware('auth');
Route::get('/posts',[PostController::class,'index'])->name('posts.index')->middleware('auth');
Route::get('/posts/create/', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::post('/posts/{post}/comment', [CommentController::class, 'comment'])->name('posts.comment')->middleware('auth');
Route::put('/posts/{posts}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::delete('/posts/delete/{post}', [PostController::class, 'destory'])->name('posts.destory')->middleware('auth');
Route::post('/posts/{post}/comments', [CommentController::class, 'comment'])->name('posts.comment')->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');


 
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('github.auth');
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
 
    // $user->token
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
