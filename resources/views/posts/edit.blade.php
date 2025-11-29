@extends('layouts.app')

@section('title', '投稿編集画面')

@section('content')
  <form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="border">
      <input type="text" name="name" value="{{ $post->name }}">
    </div>
    <div class="border">
      <input type="submit">
    </div>
  </form>
@endsection