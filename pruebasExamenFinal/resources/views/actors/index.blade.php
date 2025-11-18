@extends('layout.layout')



@section('title')

@endsection


@section('content')
    <a href="{{route('actors.show', 123)}}">Ver actores con id: 123'</a>
@endsection

