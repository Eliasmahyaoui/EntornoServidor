@extends('layout.layout')

@section('content')
<<<<<<< HEAD

@section('content')
=======
>>>>>>> e9211cdd52bae942827f363ac54f6ab2d64ba03f
    @forelse ($peliculas as $pelicula)
        <div>
            Titulo: {{ $pelicula['titulo'] }}<br>
            Director: {{ $pelicula['director'] }}<br>
            Año: {{ $pelicula['anio'] }}
        </div>
        <br>
    @empty
        <div>No hay articulos.</div>
<<<<<<< HEAD
    @endforelse
=======
    @endforelse
@endsection
>>>>>>> e9211cdd52bae942827f363ac54f6ab2d64ba03f
