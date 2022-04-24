<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController; //== require

use App\Http\Controllers\Api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('posts', [PostController::class, 'index']);
Route::post('posts/', [PostController::class, 'store']);
Route::get('posts/{post}', [PostController::class, 'show']);
Route::put('/posts/{posts}', [PostController::class, 'update'])->middleware('auth:sanctum');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth:sanctum');
Route::delete('/posts/delete/{post}', [PostController::class, 'destory'])->middleware('auth:sanctum');

