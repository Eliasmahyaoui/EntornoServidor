@extends('layout.layout')


@section('content')
<h1>Show</h1>
<p>Mostrar la información del actor  {{$id}}</p>
<a href="{{route('actors.edit',$id )}}">Editar actor con {{$id}}</a>

@endsection
