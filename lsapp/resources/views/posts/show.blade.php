@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info text-white rounded-full mb-3">Go Back</a>
    <h1>{{$post->title}}</h1>
  
   <div>
       {{-- This will allow things to parse the HTML being sent from the CKEditor --}}
       {!!$post->body!!}
   </div> 
   <hr>
   <small>Written on {{$post->created_at}} by {{$post->user->name}} </small>
   <hr>
   <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

   {!!Form::open(['action'=>['\App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
   {!!Form::close()!!}
@endsection 