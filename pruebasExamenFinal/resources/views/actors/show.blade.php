@extends('layout.layout')



@section('title')

@endsection


@section('content')
    <a href="{{ route('actors.edit', $id) }}">Editar actor con el id: {{$id}}</a>

@endsection
