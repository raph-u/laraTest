@extends('layout')

@section('content')
    <h1>Infos:</h1>
    <div>Image: {{$article->picture}}</div>
    <div>Titre: {{$article->title}}</div>
    <div>Prix: {{$article->price}}</div>
@stop