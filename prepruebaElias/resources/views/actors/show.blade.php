@extends('layout.layout')

@section('title')

@endsection

@section('content')
        <h1>Aqui se vera un actor especifico</h1>
        <a href="{{route('actors.edit', $id)}}">Editar actor con el id:{{$id}}</a>
@endsection
