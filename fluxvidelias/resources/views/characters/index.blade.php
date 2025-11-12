@extends('layout.layout')


@section('title')

@endsection


@section('content')
 @forelse ($characters as $character)
        <a href="{{route('characters.show', $anime)}}">{{$anime->title}}</a>
        <p>nombre:{{$character->name}}</p>
        <a href="{{route('characters.show', $anime->nombre )}}"></a>
    @empty
        <p>No hay nombres</p>
    @endforelse
@endsection
