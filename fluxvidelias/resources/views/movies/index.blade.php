@extends('layout.layout')

@section('content')
    @forelse ($movies as $movie)
        <div>
           <a href="{{route('movies.show',$movie)}}"> Titulo: {{$movie->title}}</a><br>

        </div>
        <br>
    @empty
        <div>No hay articulos.</div>
    @endforelse


