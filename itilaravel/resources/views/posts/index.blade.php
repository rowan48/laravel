<?php
use Carbon\Carbon;
?>
@extends('layouts.app')

@section('title') This Is Index Page @endsection

@section('content')
<div class="text-center">
  <a href="/posts/create" class="mt-4 btn btn-success">Create Post</a>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($allPosts as $post)
    <tr class="mytr">
      <td>{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      @if($post->user)
      <td>{{$post->user->name}}</td>
      @else
      <td>Not Found</td>
      @endif

      <td>{{ carbon::parse($post->created_at)->format("Y-m-d") }}</td>
      <td>
        <span>
        <a href="{{ route('posts.show', ['post' => $post['id']]) }}" class="btn btn-info">View</a>
        <x-button type="secondary" text="edit">edit</x-button>
        <form method="POST" action="{{ route('posts.destory',['post' => $post['id']])}}">
          @method("DELETE")
          @csrf
          <button onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</button>
        </form>
        </span>
        <!-- <a href="#" class="btn btn-primary">Edit</a> -->
        <!-- <a href="" class="btn btn-danger delete-user">Delete</a> -->
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="pagination-wrap">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="/posts">Previous</a></li>
                <li class="page-item"><a class="page-link" href="/posts">1</a></li>
                <li class="page-item"><a class="page-link" href="/posts">2</a></li>
                <li class="page-item"><a class="page-link" href="/posts">3</a></li>
                <li class="page-item"><a class="page-link" href="/posts">Next</a></li>
              </ul>
            </nav>
        </div>
        <div class="clearfix"></div>
@endsection