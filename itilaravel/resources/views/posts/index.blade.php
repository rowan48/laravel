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
      <th scope="col">slug</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($allPosts as $post)
    <tr class="mytr">
      <td>{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->slug }}</td>
      @if($post->user)
      <td>{{$post->user->name}}</td>
      @else
      <td>Not Found</td>
      @endif
      <td>{{\Illuminate\Support\carbon::parse($post->created_at)->format("Y-m-d") }}</td>
      <td>
        <span>
          <a href="{{ route('posts.show', ['post' => $post['id']]) }}" class="btn btn-info">View</a>
          <form method="get" style="display: inline-block;" action="{{ route('posts.edit',['post' => $post])}}">
            @csrf
            <button class="btn btn-secondary">Edit</button>
          </form>
          <form method="POST" style="display: inline-block;" action="{{ route('posts.destory',['post' => $post['id']])}}">
            @method("DELETE")
            @csrf
            <button onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</button>
          </form>
        </span>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="text-dark">
  {{ $allPosts->links() }}
</div>
@endsection