@extends('layouts.app')
post
@section('title')Create @endsection

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form method="post" action="{{route('posts.update',['posts'=>$post['id']])}}" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="{{$post['title']}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea name='description' class="form-control" id="exampleFormControlTextarea1" rows="3">{{$post['description']}}</textarea>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
    <select name="user_id" class="form-control">
      @foreach ($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update Image</label>
    <input type="file" id="image" name="image" class="@error('image') is-invalid @enderror form-control">
    @error('image')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-success">Edit Post</button>
  </div>
</form>
@endsection