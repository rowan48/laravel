<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\Jobs\PruneOldPostsJob;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;


/**
 * Store a new blog post.
 *
 * @param  \App\Http\Requests\StorePostRequest  $request
 * @return Illuminate\Http\Response
 */
class PostController extends Controller
{
    public $posts = [];
    public function index()
    {
        PruneOldPostsJob::dispatch();
        $posts = Post::with('comments')->get();
        $posts = Post::paginate(15);
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
        Storage::delete($post->path);
        $post->delete();
        return to_route('posts.index');
    }
    public function store(StorePostRequest $request)
    {
        $path = $request->file('image')->store('images');
        $data = request()->all();

        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'slug' => Str::slug($data['title'], "-"),
            'user_id' => $data['user_id'],
            'path' => $path,

        ]);
        return to_route('posts.index');
    }

    public function show($postId)
    {
        $user = User::all();
        $post = Post::find($postId);
        $comments = $post->comments;
        return view('posts.show', [
            'post' => $post,
            'comments' => $comments,
            'users' => $user,
        ]);
    }
    public function edit($postId)
    {
        $users = User::all();
        $post = Post::where('id', $postId)->first();
        return view('posts.edit', [
            'post' => $post,
            'users' => $users,
        ]);
    }
    public function update(UpdatePostRequest $request, $postId)
    {
        $data = request()->all();
        $path = $request->file('image')->store('images');
        $post = Post::where('id', $postId)->first();
        Storage::delete($post->path);
        Post::where('id', $postId)
            ->update($request->only([
                'title' => $data['title'],
                'description' => $data['description'],
                'user_id' => $data['user_id'],
                'path' => $path,
            ]));
        return to_route('posts.index');
    }
}
