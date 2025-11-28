<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('posts.create');
    }
}