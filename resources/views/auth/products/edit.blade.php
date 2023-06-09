@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">
    <div class="card-body">
        <div class="pb-8">
            @if ($errors->any())
              
                <ul class="list-group list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>


  <form action="{{ route('Products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="name">Name of Product</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="product description" placeholder="Enter name of product" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"> {{ $product->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="image">image</label>
        <input type="file" name="image">
      </div>
      <div class="form-group">
        <img src="{{ url('storage/images/' . $product->image) }}" alt="" title="" class="card-img-top"  width="200"/>

      </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" aria-describedby="product price" placeholder="Enter price" value="{{ $product->price }}">
      </div>
      <br>
      <button type="submit" class="btn btn-outline-secondary btn-sm">Update</button>
  </form>
  <br>
 <div class="mx-auto"><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> |  <a href="{{ route('Products.index')}}" type="button" class="btn btn-secondary btn-sm">Products Home</a></p>
    </div>
</div>
        </div></div></div>
        @endsection
