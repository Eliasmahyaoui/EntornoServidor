@extends('layout.layout')


@section('title')
TITULO
@endsection

@section('content')

@foreach ($actor as $key =>$value )
    <h3>{{$key}} : {{$value}}</h3>
@endforeach

@endforeach

<h1>Name{{$actor['name']}}</h1>
@endsection
