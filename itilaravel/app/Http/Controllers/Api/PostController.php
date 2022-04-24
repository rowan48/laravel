<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Str;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::all()->paginate();

        return PostResource::collection($posts);
    }

    public function show($postId)
    {
        $user = User::all();
        $post = Post::find($postId);
        $comments = $post->comments;
        return new PostResource($post);
    }
    public function store(StorePostRequest $request)
    {
        $data = request()->all();
       $post= Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'slug' => Str::slug($data['title'], "-"),
            'user_id' => $data['user_id'],
            'path' => $data['path']

        ]);
        return new PostResource($post);
    }

}
