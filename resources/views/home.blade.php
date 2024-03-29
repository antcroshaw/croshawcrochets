@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <hr>

            <div class="card">

                <div class="card-header">
                    Admin Menu
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ route('Products.index')}}" class="list-group-item list-group-item-action">Products</a>
                        <a href="{{ route('Users.index')}}" class="list-group-item list-group-item-action">Users</a>
                        <a href="/" class="list-group-item list-group-item-action">About</a>
                       
                       


                      </div>
            </div>
        </div>
    </div>
</div>
@endsection
