<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;


class PostController extends Controller
{
    public $posts = [];
    public function index()
    {
        

        $posts = Post::all();
       $posts= Post::paginate(15);
        return view(
            'posts.index',
            [
                'allPosts' => $posts,
            ]
        );
    }
    public function create()
    {
        $users = User::all();
        // dd($users);
        // User::create([
        //     'name' => $users['name'],
        //     'email' => $users['email'],


        // ]);
        return view('posts.create', [
            'users' => $users,
        ]);
    }
    public function destory($postId)
    {
        $post = Post::find($postId);

        $post->delete();
        return to_route('posts.index');
    }
    public function store()
    {
        $data = request()->all();
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'created_by' => "1",
        ]);
        return to_route('posts.index');
    }

    public function show($postId)
    {
        $user = User::where('id', $postId)->first();
        $post = Post::where('id', $postId)->first();
        $comment=Comment::where('user_id',$postId)->first();
        // dd($comment);
        return view('posts.show', [
            'post' => $post,
            'user' => $user,
            'comment'=>$comment,

        ]);
    }
    public function edit()
    {
        return view('posts.edit');
    }
}
