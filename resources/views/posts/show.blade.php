@extends('layouts.app')

@section('title', '投稿詳細画面')

@section('content')
  <h1>投稿のid</h1>
  <div>
    {{ $post->id }}
  </div>
  <h1>投稿の内容</h1>
  <div>
    {{ $post->name }}
  </div>
@endsection