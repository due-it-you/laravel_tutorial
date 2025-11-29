<?php

namespace App\Http\Controllers;

// Request 
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

// Model
use App\Models\Post;

class PostController extends Controller
{
    /**
     * 投稿の一覧表示
     */
    public function index() 
    {
        $posts = Post::all();
        // compact関数でコントローラーからビューにデータを渡す
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    // FormRequestでバリデーションを分離(app/Http/Requests/StorePostRequest.php)
    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('posts.create')
            ->with('success', '投稿が作成されました。');
    }

    // Implicit Model Binding
    // 暗黙的モデルバインディングで,選択されたIDに対応するモデルインスタンスを受け取れる
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect()->route('posts.index')
            ->with('success', '投稿を更新しました。');
    }
}