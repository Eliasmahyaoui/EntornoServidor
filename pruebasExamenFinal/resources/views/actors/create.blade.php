@extends('layout.layout')



@section('title')
@endsection


@section('content')
    <h1>Añadir un actor</h1>

    <form action="{{ route('actors.store') }}" method="post">
        @csrf

        <label for="nombre">Actor:</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" id="nacionalidad" name="nacionalidad">
        <br>
        <label for="bornbirthday">Año de nacimiento</label>
        <input type="text" id="bornbirthday" name="bornbirthday">
        <br>
        <input type="submit" value="GUARDAR">

    </form>



@endsection
