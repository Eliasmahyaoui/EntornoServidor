@extends('layout.layout')

@section('title')
@endsection

@section('content')
    <h1>Formulario</h1>

    <form action="{{ route('actors.store') }}" method="post">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="nacionality">Nacionalidad</label>
        <input type="text" name="nacionality" id="nacionality">
        <br>
        <label for="bornbirthday">Año de nacimiento</label>
        <input type="text" name="bornbirthday" id="bornbirthday">
        <br>
        <input type="submit" value="Guardar actor">


    </form>
@endsection
