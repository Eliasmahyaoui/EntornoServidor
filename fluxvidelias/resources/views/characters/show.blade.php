@extends('layout.layout')


@section('title')
@endsection



@section('content')
    <!--AQUI TENGO QUE MOSTRAR TODOS LOS characters-->

    @forelse ($character->anime as c)
        {{$c->name }}

    @empty
        "No se ha encontrado characters"
    @endforelse


    {{ $character->name }}
    <a href="{{ route('characters.index') }}">Volver</a>
@endsection
