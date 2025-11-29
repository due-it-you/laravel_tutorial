<?php

use Illuminate\Support\Facades\Route;
// このファイルで使うコントローラーのクラスを明示的に指定
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// /postにGETリクエストが送信されると、Postコントローラーのindexメソッドが実行される
// Route::get('/post', [PostController::class, 'index']);

// リソースコントローラーの定義
Route::resource('posts', PostController::class)->only([
    'index', 'create', 'store', 'show', 'edit', 'update'
]);