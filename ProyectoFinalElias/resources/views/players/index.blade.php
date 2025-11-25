@extends('layout.layout');

@section('title')
    Players
@endsection


@section('content')
    <h1>Jugadores Masculinos:</h1>

    <div id="cards">
        
        <img src="{{ asset('imagenes/Carlos_Alcaraz_card (1).png') }}" alt="Carlos Alcaraz">
        <img src="{{ asset('imagenes/Rafa_Nadal_card (1).png') }}" alt="Rafa Nadal">
        <img src="{{ asset('imagenes/Alejandro_Davidovivh_card.png') }}" alt="Alejandro_Davidovich">
        <img src="{{ asset('imagenes/Roberto_Bautista_card.png') }}" alt="Roberto Bautista">

        <h1>Jugadoras Femeninas:</h1>
        <img src="{{ asset('imagenes/Sara_Sorribes_card.png') }}" alt="Sara Sorribes">
        <img src="{{ asset('imagenes/Cristina_Bucsa_card.png') }}" alt="Cristina Bucsa">
        <img src="{{ asset('imagenes/Paula_Badosa_card.png') }}" alt="Paula Badosa">
    </div>
@endsection
