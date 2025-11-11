@extends('layout.layout')


@section('content')
<p>Ficha de la pelicula {{$movie->title}}</p>
<p>Año de la pelicula {{$movie->year}}</p>
<p>plot de la pelicula {{$movie->plot}}</p>
<p>Visibilidad de la pelicula {{$movie->visibility}}</p>


@endsection



