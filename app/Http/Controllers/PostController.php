<?php

namespace App\Http\Controllers;

// Request 
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

// Model
use App\Models\Post;

class PostController extends Controller
{
    /**
     * 投稿の一覧表示
     */
    public function index() 
    {
        return view('post.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    // FormRequestでバリデーションを分離(app/Http/Requests/StorePostRequest.php)
    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('posts.create');
    }
}