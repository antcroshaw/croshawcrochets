@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">
    <div class="card-header text-center">
        {{ $product->name }}
    </div>
    
    <div class="card-body">
          
      <p> content goes here</p>
        <br>
        <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a></p>

 </div>
 </div>
 </div>
 </div>
 
 @endsection
 
