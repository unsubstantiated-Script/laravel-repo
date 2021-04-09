@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card p-3 my-3">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Writen on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{-- for pagination --}}
         {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
    
@endsection