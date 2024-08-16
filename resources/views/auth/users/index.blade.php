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
             
        
        <p><strong>Name: </strong>{{ $user->name }}</p>
        <p><strong>Email: </strong>{{ $user->email }}</p>
        <p><strong>Admin: Yes</strong></p>
        <p><a type="button" class="btn btn-sm btn-warning " href="{{ route('Users.edit',$user->id) }}">Edit</a> | <a href="{{ route('Users.show', $user->id) }}" class="btn btn-secondary btn-sm">View User </a></p>
        <p><form method="POST"  onsubmit="return confirm('The User will be removed permanently. Are you sure?')" action="{{ route('Users.destroy', $user->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form></p>


        <hr>
<p>       
</p>
        @endforeach
       
        
       
        <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> |  <a href="Users/create" type="button" class="btn btn-primary btn-sm">create new user</a></p>
          
  
   </div>

 </div>
 </div>
 </div>
 </div>
 
 @endsection
 