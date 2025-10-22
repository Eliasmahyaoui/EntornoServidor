@extends('layout.layout')

@section('content')
<h1>Inicio</h1>
<p>Inicio de actores</p>
<a href="{{route('actors.show',123 )}}">Ver actor con id 123</a>
@endsection
