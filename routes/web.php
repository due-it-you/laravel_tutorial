<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// /postにGETリクエストが送信されると、Postコントローラーのindexメソッドが実行される
Route::get('/post', [PostController::class, 'index']);