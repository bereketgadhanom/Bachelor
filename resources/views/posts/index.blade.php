@extends('layouts.main')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
                    <br>
                <small>Updated on {{$post->updated_at}}</small>
            </div>
        @endforeach   
        {{-- {{$posts->links()}}     --}}
    @else
        <p>No posts found </p>
    @endif
    <br>
    <a class="btn btn-primary" href="/posts/create"> Create new post </a>
@endsection