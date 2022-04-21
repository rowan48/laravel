<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class CommentController extends Controller
{
    public function comment($postID)
    {
        $post = Post::find($postID);
        $data = request()->all();
        $comment = $post->comments()->create([
            'comments' => $data['comment'],
            'commentable_id' => $postID,
            'commentable_type' => "App\Models\Post",
            'user_id' => $data['user_id'],

        ]);
        return to_route('posts.show', [
            'post' => $postID,

        ]);
    }
    public function storecomment($postID)
    {
        $data = request()->all();
        //dd($post);
        $comment = Comment::where('post_id', $postID)->get();
        $onecomment = Comment::where('post_id', $postID)->first();;
        Comment::create([
            'comments' => $data['comment'],
            'created_at' => now(),
            'updated_at' => now(),
            'post_id' => $postID,
        ]);
        $post = Post::find($postID);
        $comment = Comment::where('post_id', $postID)->get();
        return view('posts.comment', [
            'comment' => $comment,
            'posts' => $post,
            'comment' => $comment,
        ]);
    }
}
