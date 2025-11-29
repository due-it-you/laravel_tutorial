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
        <!-- 削除ボタン -->
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
          @csrf
          <!-- メソッドを指定 -->
          @method('DELETE')
          <button type="submit" onClick="return confirm('本当に削除しますか？')" class="border text-white bg-red-700">削除</button>
        </form>
      </a>
    @endforeach
  </div>
@endsection