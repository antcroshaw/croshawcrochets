@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">
    <div class="card-header text-center">
        {{ $user->name }}
    </div>
    
    <div class="card-body mx-auto">
         
      <p> <strong>Name: </strong>{{ $user->name }}</p>
      <p><strong>Email: </strong>{{ $user->email }}</p>
      <p><strong>Admin: {{ $user->admin }}</strong></p>
     
      

        

 </div>
 <div class="mx-auto"><a href="/Users" type="button" class="btn btn-secondary btn-sm">back to users</a></p>

 </div>
 </div>
 </div>
 
 @endsection
 
