<?php

use App\Http\Controllers\api\v1\PostApiController;

// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\TagController;
// use Illuminate\Support\Facades\Route;

//REST API (Restful API) => HTTP standard
//Request => GET, POST, PUT, PATCH, DELETE
//Response => 200, 201, 400, 404, 500
Route::prefix('v1')->group(function () {
    Route::apiResource('post', PostApiController::class);
});
// Route::post('/blog', [PostController::class, 'create']);
// Route::delete('/blog/{id}', [PostController::class, 'delete']);

// Route::post('/comment', [CommentController::class, 'create']);

// Route::post('/tag', [TagController::class, 'create']);

