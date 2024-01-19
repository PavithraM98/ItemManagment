@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Update Product</h2>
    <hr>

     <form action="{{ route('products.update', $products->id) }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$products->title}}">
            <input type="hidden" name="id" value="{{$products->id}}"/>
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price"  value="{{$products->price}}">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" value="">{{$products->description}}</textarea>
          </div>

          <button type="submit" class="btn btn-primary">Update Product</button>

    </form>

</div>


@endsection