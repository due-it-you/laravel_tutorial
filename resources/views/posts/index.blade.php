@extends('layouts.app')

@section('title', '投稿新規作成')

@section('content')
  <h1>投稿一覧画面</h1>
  <div>
    <!-- コントローラーから受け取った変数を繰り返し処理で展開 -->
    @foreach ($posts as $post)
      <!-- 第１引数に『名前付きルート』 第2引数に『パラメータ』を渡してURLを生成してくれる -->
      <a href="{{ route('posts.show', $post) }}">
        <div class="border hover:bg-gray-300">
          {{ $post->name }}
        </div>
      </a>
    @endforeach
  </div>
@endsection