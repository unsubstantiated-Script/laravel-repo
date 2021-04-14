@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
  <h1 class="display-4">Welcome to Laravel!</h1>
  <p class="lead">This is a demo Laravel Application</p>
  @guest
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
  </p>
  @endguest
</div>
@endsection