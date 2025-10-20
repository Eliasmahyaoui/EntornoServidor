@extends('layout.layout')

@section('content')
    @forelse ($peliculas as $pelicula)
        <div>
            Titulo: {{ $pelicula['titulo'] }}<br>
            Director: {{ $pelicula['director'] }}<br>
            Año: {{ $pelicula['anio'] }}
        </div>
        <br>
    @empty
        <div>No hay articulos.</div>
    @endforelse
@endsection
