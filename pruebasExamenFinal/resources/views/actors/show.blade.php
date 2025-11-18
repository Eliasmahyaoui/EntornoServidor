@extends('layout.layout')



@section('title')

@endsection


@section('content')
    <a href="{{route('actors.edit'$id)}}">Editar actor con {{$id}}</a>
@endsection
