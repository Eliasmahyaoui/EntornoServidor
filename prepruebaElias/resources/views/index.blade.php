@extends('layout.layout')

@section('title')
    Inicio
@endsection

@section('content')

<h1>Bienvenido al examen</h1>
<img src="https://www.google.com/url?sa=i&url=http%3A%2F%2Fblog.tiching.com%2F10-utiles-consejos-para-superar-los-examenes%2F&psig=AOvVaw29H1pU52lRsQdDIW-Pgfjr&ust=1763598919111000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCMiRiYr8_JADFQAAAAAdAAAAABAE" alt="Imagen de examenes">
<a href="{{route('actors.show',123)}}">Ver actor con id 123</a>
@endsection



