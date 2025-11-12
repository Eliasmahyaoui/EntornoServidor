@extends('layout.layout')


@section('title')

@endsection



@section('content')
    {{ $character->title }}
    <a href="{{ route('character.index') }}">Volver</a>
@endsection
