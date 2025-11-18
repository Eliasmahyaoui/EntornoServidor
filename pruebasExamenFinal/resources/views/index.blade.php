@extends('layout.layout')


@section('title')
index
@endsection


@section('content')
<a href="{{route('actors.show', 123)}}">Ver actores con ID 123  </a>

@endsection


