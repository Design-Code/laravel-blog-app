@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
        <h1>Welcome!</h1> 
        <p>This is a blog application created with Laravel</p>
        <p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
        </p>
        </div>
@endsection