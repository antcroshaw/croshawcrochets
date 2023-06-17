@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
    <div class="card-header">
        Products
    </div>
    <div class="card-body px-2 ">
        @if ($message = session('message'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
    </div>
         
        <table class="table table-striped table-hover table-bordered table-responsive">
            <thead class="thead-dark">
              <tr>
                <th scope="col">
                Product Name
                </th>
                <th scope="col">
                 Price
                </th>
                <th scope="col">
                 Description
                </th>
                <th scope="col">
                    Available
                </th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product )
                <tr>
                    
                    <td><a href="{{ route('Products.show', $product->id) }}" class="text-decoration-none text-secondary"> {{ $product->name }}</a></td>
                    <td>£{{ $product->price }}</td>
                    <td>{{ Illuminate\Support\Str::limit($product->description, 10) }}</td>
                    <td>{{ $product->available }}</td>
                    <td> <a type="button" class="btn btn-sm btn-warning " href="{{ route('Products.edit',$product->id) }}">Edit</a></td>

                    <td> <form method="POST"  onsubmit="return confirm('The product will be removed permanently. Are you sure?')" action="{{ route('Products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form></td>
                </tr>
                @endforeach
               
            </tbody>
        </table> 
        <div class="pagination justify-content-center">
            {{ $products->links('pagination::bootstrap-5') }}
            </div>
       <br>
        <br>
        <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> | 
        <a href="Products/create" type="button" class="btn btn-secondary btn-sm">Create new product</a></p>

 </div>
 </div>
 </div>
 </div>
 
 @endsection
 