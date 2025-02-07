<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{id_post}', [PostController::class, 'postShow']);
<<<<<<< HEAD
=======
Route::get('/posts', [PostController::class, 'postsShow']);
Route::get('/posts/{id_category}', [PostController::class, 'postsShowCategory']);
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
