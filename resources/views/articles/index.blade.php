@extends('layout')

@section('content')
    <h1>All articles</h1>
    @foreach ($articles as $article)
        <div><a href="{{$article->id}}">{{$article->title}}</a></div>
    @endforeach
@stop