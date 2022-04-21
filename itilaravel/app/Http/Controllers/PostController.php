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
            'user_id' => $data['user_id'],
        ]);
        return to_route('posts.index');
    }

    public function show($postId)
    {
        $user=User::all();
        $post = Post::where('id', $postId)->first();
        // $comment=Comment::where('user_id',$postId)->first();
        return view('posts.show', [
            'post' => $post,
            // 'comment'=>$comment,

        ]);
    }
    public function edit($postId)
    {
        $users = User::all();
        $post = Post::where('id', $postId)->first();
        // dd($post);
        return view('posts.edit',[
            'post'=>$post,
            'users' => $users,
        ]);
    }
    public function update($postId){
        $data = request()->all(); 
        Post::where('id', $postId)
        ->update(['title' => $data['title'],
        'description' => $data['description'],
        'user_id' => $data['user_id'],]);
        return to_route('posts.index');

        
    }
   
}