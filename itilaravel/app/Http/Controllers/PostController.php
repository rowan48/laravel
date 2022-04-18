<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public $posts = [];
    public function index()
    {

        $posts = Post::all();
        // $data=User::all();
        // User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => $data['password'],
        // ]);

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
        User::create([
            'name' => $users['name'],
            'email' => $users['email'],


        ]);
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
        dd($data);

        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]);
        return to_route('posts.index');
    }

    public function show($postId)
    {
        $user = User::where('id', $postId)->first();
        // dd($user);


        $post = Post::where('id', $postId)->first();
        return view('posts.show', [
            'post' => $post,
            'user' => $user,

        ]);
        // $post = Post::find($postId);
        // return $postId;
        /*
                    'postId'=>$postId,
            'post'=>$post,
            'email'=>$data['email'],
            'name'=>$data['name']
        */
    }
    public function edit()
    {
        return view('posts.edit');
    }
}
