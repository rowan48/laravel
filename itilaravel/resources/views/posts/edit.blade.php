@extends('layouts.app')
post
@section('title')Create @endsection

@section('content')
      <form method="post" action="{{route('posts.update',['posts'=>$post['id']])}}">
      @csrf
      @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value ="{{$post['title']}}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name='description' class="form-control" id="exampleFormControlTextarea1"  rows="3">{{$post['description']}}</textarea>
          </div>

          <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select name="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-success">Edit Post</button>
          </div>
        </form>
@endsection
