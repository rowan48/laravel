<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;


class CommentController extends Controller
{
    public function comment($postID){
        $data = request()->all(); 
        $post = Post::where('id', $postID)->first();
        $post=Post::where('id',$postID)->first();

        $post=Post::find($postID);

        $comment= Comment::where('post_id', $postID)
         ->get();
        // $comment=$post->comments()->create([
        //     'body' => $data['comment'],
        //     'commentable_id' =>$postID ,
        //     'commentable_type' => "App\Models\Post",
            
        // ]);

        // dd($post);
        return view('posts.comment',['comment'=>$comment,
                                                    'posts'=>$post, 
    ]);
        return to_route('posts.comment',[
            'comment'=>$comment,
            'posts'=>$post,
        ]);

    }
    public function storecomment ($postID){
        $data=request()->all();
        //dd($post);
        $comment= Comment::where('post_id', $postID)->get();
        $onecomment=Comment::where('post_id', $postID)->first();
        // dd($comment);
        // dd($post);
        Comment::create([
            'comments'=>$data['comment'],
            'created_at'=>now(),
            'updated_at'=>now(),
            'post_id'=>$postID,
        ]);
        $post = Post::where('id', $postID)->first();
        return view('posts.comment',['comment'=>$comment,
        'posts'=>$post, 
        'comment'=>$comment,
]); 

    }


}