<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public $posts = [];
    public function index()
    {

        $posts=Post::all();
        return view(
            'posts.index',
            [
                'allPosts' => $posts,
            ]
        );
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return view('posts.create');
    }

    public function show($postId)
    {
        return view('posts.show');
    }
    public function edit()
    {
        return view('posts.edit');
    }
}
