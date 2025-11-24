@extends('layout.layout')

@section('title')
@endsection

@section('content')
    <h1>editará el formulario</h1>

    <form action="{{ route('actors.store') }}" method="post">
        @csrf
        @method('put')
         <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="nacionality">Nacionalidad</label>
        <input type="text" name="nacionality" id="nacionality">
        <br>
        <label for="bornbirthday">Año de nacimiento</label>
        <input type="text" name="bornbirthday" id="bornbirthday">
        <br>
        <input type="submit" value="Editar actor">


    </form>
@endsection
