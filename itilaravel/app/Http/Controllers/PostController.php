<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
    public $posts=[];
    public function welcome(){
        return view('welcome');

    }
    public function index(){

        $posts = [
            ['id' => 1, 'title' => 'first ', 'posted_by' => 'rowan', 'created_at' => '2022-04-11'],
            ['id' => 2, 'title' => 'second post', 'posted_by' => 'esraa', 'created_at' => '2022-04-11'],
            ['id' => 2, 'title' => 'third post', 'posted_by' => 'dina', 'created_at' => '2022-04-11'],


        ];
        return view('posts.index',
        ['allPosts'=>$posts,
        ]);

    }//end of index function


  
  public function create()
    {
        return view('posts.create');
        
    }//end of create function

    public function store()
    {
        return view('posts.create');
    }//end of store function

    public function show($postId)
    {
        return view('posts.show');
    }//end of show function
    public function edit()
    {
        return view('posts.edit');
    }//end of show function


}//end of PostController class

    















