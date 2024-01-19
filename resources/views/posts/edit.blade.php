@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Update Product</h2>
    <hr>

     <form action="{{ route('posts.update', $posts->id) }}" enctype="multipart/form-data" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$posts->name}}">
            <input type="hidden" name="id" value="{{$posts->id}}"/>
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price"  value="{{$posts->price}}">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" value="">{{$posts->description}}</textarea>
          </div>

          <button type="submit" class="btn btn-primary">Update Post</button>

    </form>

</div>


@endsection