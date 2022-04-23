<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

 


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
        $posts = Post::all();
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

        $post->delete();
        return to_route('posts.index');
    }
    public function store(StorePostRequest $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ],[
        //         'title.required' => 'My Customized Message',
        //         'title.min' => 'customizing the min rule'
        //     ]);
        // // dd($validator);
        $data = request()->all();
        // // $validated = $request->validated();
        // // dd($validated);
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'slug'=>Str::slug($data['title'],"-"),
            'user_id' => $data['user_id'],
        ]);
        return to_route('posts.index');
    }

    public function show($postId)
    {
        $user = User::all();
        // $user=User::find($postId);
        $post = Post::find($postId);
        $comments = $post->comments;
        // $data=DB::table('posts')->where("slug",$slug);
        return view('posts.show', [

            'post' => $post,
            'comments' => $comments,
            'users' => $user,
            // 'data'=>$data,

        ]);
    }
    public function edit($postId)
    {
        $users = User::all();
        $post = Post::where('id', $postId)->first();
        // dd($post);
        return view('posts.edit', [
            'post' => $post,
            'users' => $users,
        ]);
    }
    public function update(UpdatePostRequest $request,$postId )
    {
        $data = request()->all();
        // $title = $request->old('title');
        // $request->validate([
        //     'title' => Rule::requiredIf(function() use($request){
        
        //         return  $request->old('title');
        //     })
        // ]);
        // dd($request);

        Post::where('id', $postId)
            ->update($request->only([
                'title' => $data['title'],
                'description' => $data['description'],
                'user_id' => $data['user_id'],
            ]));
        // return redirect()->route('posts.index');

        return to_route('posts.index');
    }
}
