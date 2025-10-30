@extends('layout.layout')

@section('content')
    <form action="{{ route('actors.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">


        <label for="nacionalidad">Nacionalidad</label>
        <input type="text" id="nacionalidad" name="nacionalidad"><br>

        <label for="bornbirthday">Año de nacimiento</label><br>
        <input type="text" id="bornbirthday" name="bornbirthday"><br>

        <input type="submit" value="enviar">

    </form>
@endsection

@section('title')
 AÑADE UN UNEVO ACTOR
    @endsection
