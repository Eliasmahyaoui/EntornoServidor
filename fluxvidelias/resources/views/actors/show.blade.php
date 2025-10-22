@extends('layout.layout')


@section('content')
<h1>Show</h1>
<p>Mostra la informacion del actor  {{$id}}</p>
<a href="{{route('actors.edit',$id )}}">Ver actor con id 123</a>

@endsection
