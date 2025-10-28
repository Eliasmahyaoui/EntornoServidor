<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/actor.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/movie.inc.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen </title>
</head>
<body>

<?php
// Crea una película
$movie1 = new Movie("Harry Potter", "Severus Snape", 2004, "Ciencia ficcion", 170);
$actor1 = new Actor("Voldemort");
// Añade el actor a la película
$movie1->addActor($actor1);

// Crea otra película
$movie2 = new Movie("Tomb Raider", "Alicia Vikander", 2008, "Accion", 130);
// Añade el mismo actor (o uno nuevo)
$movie2->addActor($actor1);

// Crea una tercera película
$movie3 = new Movie("Matrix", "Lana Wachowski", 1999, "Ciencia ficcion", 136);
$movie3->addActor(new Actor("Neo"));

// Mostrar datos de cada película y sus actores
echo "<h2>Películas registradas:</h2>";

echo "<h3>" . $movie1->title . "</h3>";
echo "Director: " . $movie1->director . "<br>";
echo "Año: " . $movie1->year . "<br>";
echo "Género: " . $movie1->genre . "<br>";
echo "Duración: " . $movie1->duration . " minutos<br>";
echo "Actores:<br>";
foreach ($movie1->actors as $actor) {
    echo "- " . $actor->name . "<br>";
}





?>
    
</body>
</html>