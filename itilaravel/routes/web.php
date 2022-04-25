<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //== require
use App\Http\Controllers\CommentController; //== require
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleController; //== require
use App\Http\Controllers;
use App\Models\User; 


// use App\Http\Controllers\Auth;





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
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/create/', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::post('/posts/{post}/comment', [CommentController::class, 'comment'])->name('posts.comment')->middleware('auth');
Route::put('/posts/{posts}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::delete('/posts/delete/{post}', [PostController::class, 'destory'])->name('posts.destory')->middleware('auth');
Route::post('/posts/{post}/comments', [CommentController::class, 'comment'])->name('posts.comment')->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');

Auth::routes();

 
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('github.auth');
 

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->stateless()->user();
    $user = User::where('github_id', $githubUser->id)->first();
    if ($user) {
        $user->update([
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);
    } else {
        $user = User::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password'=>rand(1,5000),
            'github_id' => $githubUser->id,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);
    }
    return to_route("posts.index");
});
Route::get('/redirect', [GoogleController::class, 'redirect'])->name('redirect');
Route::get('/callback', [GoogleController::class, 'callback'])->name('callback');
Route::get('/home', function () {
    return to_route("posts.index");
})->name('home');
