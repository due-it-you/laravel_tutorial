@extends('layouts.app')

@section('title', '投稿新規作成')

@section('content')
    <div>
        <h1>投稿新規作成画面</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <input type="text" name="name" class="border">
            <input type="submit" class="border">
        </form>
    </div>
@endsection
