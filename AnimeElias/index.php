<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/anime.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/character.inc.php');

// Crear animes
$anime1 = new Anime("Naruto", "Masashi Kishimoto", "Shonen", 220, 2002);
$anime2 = new Anime("Sailor Moon", "Naoko Takeuchi", "Shojo", 200, 1992);
$anime3 = new Anime("Attack on Titan", "Hajime Isayama", "Seinen", 75, 2013);

$animes = [$anime1, $anime2, $anime3];

// Añadir personajes (solo name, age y species)
$anime1->addCharacter(new Character("Naruto Uzumaki", 17, "humano"));
$anime1->addCharacter(new Character("Sasuke Uchiha", 17, "humano"));

$anime3->addCharacter(new Character("Eren Yeager", 19, "humano"));
$anime3->addCharacter(new Character("Mikasa Ackerman", 19, "humano"));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Animes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Animes y Personajes</h1>

    <?php foreach ($animes as $anime): ?>
        <div class="anime">
            <h2><?= $anime->title ?> (<?= $anime->year ?>)</h2>
            <p><strong>Autor:</strong> <?= $anime->autor ?></p>
            <p><strong>Género:</strong> <?= $anime->genre ?></p>
            <p><strong>Episodios:</strong> <?= $anime->episodes ?></p>
            <p><strong>Personajes (<?= $anime->countCharacters() ?>):</strong></p>

            <?php if ($anime->countCharacters() > 0): ?>
                <ul>
                    <?php foreach ($anime->characters as $character): ?>
                        <li><?= $character->name ?>, <?= $character->age ?> años, especie: <?= $character->species ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No tiene personajes añadidos.</p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <footer>
        <p>Autor: Elias Mahyaoui</p>
    </footer>
</body>
</html>
