@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary mb-3">Go Back</a>
    <h1>{{$post->title}}</h1>
  
   <div>
       {{-- This will allow things to parse the HTML being sent from the CKEditor --}}
       {!!$post->body!!}
   </div> 
   <hr>
   <small>Written on {{$post->created_at}}</small>
@endsection 