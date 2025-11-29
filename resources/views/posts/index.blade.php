@extends('layouts.app')

@section('title', '投稿新規作成')

@section('content')
  <h1>投稿一覧画面</h1>
  <div>
    <!-- コントローラーから受け取った変数を繰り返し処理で展開 -->
    @foreach ($posts as $post)
      <div class="border">
        {{ $post->name }}
      </div>
    @endforeach
  </div>
@endsection