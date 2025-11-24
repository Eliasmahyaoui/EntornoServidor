
<!--Aqui iran todas las rutas que pide el enunciado -->
<a href="{{ route('inicio') }}">Principal</a>
<a href="{{ route('subjects.index') }}">Ver asignaturas</a>
<a href="{{ route('subjects.show', 33) }}">Ver asignaturas: 33</a> <!-- si da error quita el id y pon 123!-->
<a href="{{ route('subjects.create') }}">Añadir asignatura</a>
