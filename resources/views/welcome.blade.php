@extends('layout')

@section('content')
    @unless (empty($people))
        @foreach ($people as $person)
                hello {{$person}}
            @endforeach
    @else
        there are no people
    @endunless
@stop