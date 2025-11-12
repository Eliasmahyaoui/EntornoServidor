@extends('layout.layout')


@section('title')
@endsection



@section('content')
    {{ $character->name }}
    <a href="{{ route('characters.index') }}">Volver</a>
@endsection
