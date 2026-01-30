<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Api\Admin\AuthController;


// ───────────────
// 公開API（ユーザー向け）
// ───────────────

// 記事一覧・詳細
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article}', [ArticleController::class, 'show']);

// コメント（匿名）
Route::get('/articles/{article}/comments', [CommentController::class, 'index']);
Route::post('/articles/{article}/comments', [CommentController::class, 'store']);


// ───────────────
// 管理者API
// ───────────────

Route::prefix('admin')->group(function () {

    Route::post('/login', [AuthController::class, 'login']);
    // 記事管理
    Route::get('/articles', [AdminArticleController::class, 'index']);
    Route::post('/articles', [AdminArticleController::class, 'store']);
    Route::put('/articles/{article}', [AdminArticleController::class, 'update']);

    // コメント削除
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
});

