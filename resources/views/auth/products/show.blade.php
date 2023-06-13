@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">
    <div class="card-header text-center">
        {{ $product->name }}
    </div>
    
    <div class="card-body mx-auto">
         
      <p> <strong>Name: </strong>{{ $product->name }}</p>
      <p><strong>Description: </strong>{{ $product->description }}</p>
      <p><strong>Price: {{ $product->price }}</strong></p>
     
      
      <img src="{{ url('storage/images/default-image.jpg') }}" alt="" title="" class="card-img-top" />

        

 </div>
 <div class="mx-auto"><a href="/Products" type="button" class="btn btn-secondary btn-sm">back to products</a></p>

 </div>
 </div>
 </div>
 
 @endsection
 
