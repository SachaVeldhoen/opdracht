<?php

use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', BlogPostController::class);
