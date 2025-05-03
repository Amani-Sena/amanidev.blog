<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{slug_post}', [PostController::class, 'postShow']);
// Route::get('/posts', [PostController::class, 'postsShow']);
// Route::get('/posts/{id_category}', [PostController::class, 'postsShowCategory']);
Route::get('/posts', [PostController::class, 'postsSearch'])->name('posts.index');
Route::get('/404', function() {
    return view('404');
});
