<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

// 記事一覧API
Route::get('/articles', [ArticleController::class, 'index']);
