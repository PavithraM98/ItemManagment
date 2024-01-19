@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Create Post</h2>
    <hr>

    <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

        

        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Create Post</button>

    </form>

</div>


@endsection