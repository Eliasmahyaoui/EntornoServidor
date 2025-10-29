@extends('layout.layout')


@section('title')
TITULO
@endsection

@section('content')

@foreach ($actor as $key =>$value )

@endforeach 

@endforeach

<h1>Name{{$actor['name']}}</h1>
@endsection
