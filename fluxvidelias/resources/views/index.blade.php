@extends('layout.layout')

@section('content')
    <h1>"Bienvenido a fluxVid</h1>
    <a href="{{route('actors.show', 123)}}">Ver actor con id 123</a>

@endsection




