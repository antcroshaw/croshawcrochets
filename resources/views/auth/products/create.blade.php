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


        <form action="{{ route('Products.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
       <input type="textarea" name="description">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" />
      </div>
    
    <button type="submit" class="btn btn-outline-secondary btn-sm">Create</button>
  </form>
  <br>
 <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> |  <a href="{{ route('Products.index')}}" type="button" class="btn btn-secondary btn-sm">Products Home</a></p>
    </div>
</div>
        </div></div></div>
        @endsection
