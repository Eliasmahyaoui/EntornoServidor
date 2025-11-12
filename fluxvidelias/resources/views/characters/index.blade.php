@extends('layout.layout')


@section('title')

@endsection


@section('content')
 @forelse ($characters as $character)
        <a href="{{route('characters.show', $character)}}">{{$character->name}}</a>
        <p>nombre:{{$character->name}}</p>
        <a href="{{route('characters.show', $character->name)}}"></a>
    @empty
        <p>No hay characters</p>
    @endforelse
@endsection
