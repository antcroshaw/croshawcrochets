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
         @foreach ($users as $user )
             <p>{{ $user->name }}</p>
         @endforeach
      
       <br>
        <br>
        <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> | 
        <a href="#" type="button" class="btn btn-secondary btn-sm">Create new user</a></p>

 </div>
 </div>
 </div>
 </div>
 
 @endsection
 