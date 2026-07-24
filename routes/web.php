<?php


use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);
Route::get('/about', AboutController::class);
Route::get('/contact', ContactController::class);
Route::get('/job', [JobController::class, 'index']);

Route::resource('blog', PostController::class);
// Route::get('/blog', [PostController::class, 'index']);
// Route::post('/blog', [PostController::class, 'create']);
// Route::delete('/blog/{id}', [PostController::class, 'delete']);
// Route::get('/blog/{id}', [PostController::class, 'show']);


Route::resource('comment', CommentController::class);
// ->except(['destroy']);
// Route::get('/comment', [CommentController::class, 'index']);
// Route::post('/comment', [CommentController::class, 'create']);

Route::resource('tag', TagController::class);
// ->only(['index', 'store']);
// Route::get('/tag', [TagController::class, 'index']);
// Route::post('/tag', [TagController::class, 'create']);
// Route::get('/tag/create/manytomany', [TagController::class, 'testManyToMany']);


