<<<<<<< HEAD
<!--En la vista create se deberá hacer SIEMPRE un formulario -->

@extends('layout.layout')

@section('title')
    Formulario
@endsection

<form action="{{ route('characters.store') }}" method="post">
    @csrf
    Nombre:<input type="text" name="name">
    <br>
    Edad:<input type="text" name="age">
    <br>
    Género:<input type="text" name="gender">
    <br>
    Rol:<input type="text" name="role">
    <br>
    Descripción:<input type="text" name="description">
    <br>
    <input type="submit" value="Guardar">
</form>


