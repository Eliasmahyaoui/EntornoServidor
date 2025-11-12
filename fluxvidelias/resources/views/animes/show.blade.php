@extends('layout.layout')


@section('title')
@endsection



@section('content')
    {{ $anime->title }}
    <a href="{{ route('animes.index') }}">Volver</a>
@endsection
