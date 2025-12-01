@extends('layout.layout')


@section('title')
@endsection



@section('content')

 <!--AQUI TENGO QUE MOSTRAR TODOS LOS ANIMES-->
 @forelse ( $anime->characters as $a)
        {{$a->name}}

    @empty
         "No se han encontrado personajes"
    @endforelse

    <br>
    {{ $anime->title }}
    <br>
    <a href="{{ route('animes.index') }}">Volver</a>
    <br>




@endsection
