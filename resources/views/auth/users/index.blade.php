@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
    <div class="card-header">
        Users
    </div>
    <div class="card-body px-2 ">
        @if ($message = session('message'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
    </div>
    <div class="card-body mx-auto">
         @foreach ($users as $user )
             
        
        <p> <strong>Name: </strong>{{ $user->name }}</p>
        <p><strong>Email: </strong>{{ $user->email }}</p>
        <p><strong>Admin: Yes</strong></p>
        <p><a type="button" class="btn btn-sm btn-warning " href="{{ route('Users.edit',$user->id) }}">Edit</a></p>


        <hr>

        @endforeach
       
        
       
  
          
  
   </div>

 </div>
 </div>
 </div>
 </div>
 
 @endsection
 