@extends('layout.layout')

@section('title')
    Formulario
@endsection


@section('content')
    <h1>Formulario</h1>

    <form action="{{ route('subjects.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="codigo">Codigo:</label>
        <input type="text" name="codigo" id="codigo">
        <br>
        <label for="ciclo">Ciclo:</label>
        <input type="text" name="ciclo" id="ciclo">
        <br>
        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso">
        <br>
        <input type="submit" value="Guardar asignatura">

        @if ($errors->any())
            Hay errores en el formulario: <<br>
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
        @endif

    </form>
@endsection
