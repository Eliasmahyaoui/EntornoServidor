<nav>
    <ul>
        <h3>Actores</h3>
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        <li><a href="{{ route('actors.index') }}">Ver actores</a></li>
        <li> <a href="{{ route('actors.create') }}">Añadir actor </a></li>

        <h3>Animes</h3>
        <li> <a href="{{ route('animes.index') }}">Ver animes</a></li>
        <li><a href="{{ route('animes.create') }}">Añadir anime</a></li>

        <h3>Characters</h3>
        <li><a href="{{ route('characters.index') }}">Ver characters </a></li>
        <li> <a href="{{ route('characters.create') }}"> Añadir character</a></li>
        

    </ul>

</nav>
