@extends('layouts.main')

@section('content')
<h1>{{$title}}</h1>
    @if(count($studiene) > 0)
        <ul class="list-group">
            @foreach($studiene as $studie)
                <li class="list-group-item"> {{$studie}} </li>
            @endforeach
        </ul>
    @endif
@endsection