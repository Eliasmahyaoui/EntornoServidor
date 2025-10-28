<?php
require_once 'includes/anime.inc.php';
require_once 'includes/character.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


$anime1 = new Anime("Naruto", "Masashi Kishimoto", 2002, "Shonen", 220);

$char1 = new Character("Naruto Uzumaki",2015,"chino","humano");
$char2 = new Character("Sasuke Uchiha",2015,"chino","titan");

$anime1->addCharacter($char1);
$anime1->addCharacter($char2);


echo "Total personajes: " . $anime1->countCharacters(); // 👉 2

$anime1->removeCharacter("Naruto Uzumaki");

echo "<br>Total después de eliminar: " . $anime1->countCharacters(); // 👉 1
    ?>
</body>

</html>