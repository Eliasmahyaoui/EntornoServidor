<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Disfruta de estas peliculas</h1>

    {{--
    @forelse ($peliculas as $pelicula)
        <div>Pelicula: {{ $pelicula['titulo'] }} {{ $pelicula['director'] }} {{ $pelicula['anio'] }}</div>
    @empty
        <div>No hay peliculas </div>
    @endforelse
    --}}
    <br><br>

    @each('movies.movie', $peliculas,'pelicula','movies.nomovies' );



</body>

</html>
