@extends('layout.layout')

@section('title')

@endsection





@section('content')
    @forelse ($animes as $anime)
        <a href="{{route('animes.show', $anime)}}">{{$anime->title}}</a>
        <p>Año:{{$anime->release_year}}</p>
        <p>Puntuacion:{{$anime->rating}}</p>
        <p>¿Tiene manga? {{$anime->has_manga}}</p>
        <a href="{{route('animes.show', $anime->title )}}"></a>
    @empty
        <p>No hay animes</p>
    @endforelse

@endsection
