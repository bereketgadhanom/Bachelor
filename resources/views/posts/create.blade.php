@extends('layouts.main')

@section('content')
    <h1> Create post </h1>
    {!! Form::open(['action'=>'PostsController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'
            =>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('content', 'Content')}}
            {{Form::textarea('content', '', ['id'=>'article-ckeditor','class='=>'form-control', 'placeholder'=>'Content'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection