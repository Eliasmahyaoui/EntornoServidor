<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/anime.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/character.inc.php');

$anime1 = new Anime("Naruto", "Masashi Kishimoto", "Shonen", 220, 2002);
$anime2 = new Anime("Sailor Moon", "Naoko Takeuchi", "Shojo", 200, 1992);
$anime3 = new Anime("Attack on Titan", "Hajime Isayama", "Seinen", 75, 2013);

$animes = [$anime1, $anime2, $anime3];

// Añadir personajes
$anime1->addCharacter(new Character("Naruto Uzumaki", "humano", 17, "Konoha"));
$anime1->addCharacter(new Character("Sasuke Uchiha", "humano", 17, "Konoha"));

$anime3->addCharacter(new Character("Eren Yeager", "humano", 19, "Shiganshina"));
$anime3->addCharacter(new Character("Mikasa Ackerman", "humano", 19, "Shiganshina"));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Animes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: darkblue; }
        .anime { margin-bottom: 25px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        footer { margin-top: 40px; font-size: 14px; text-align: center; color: gray; }
    </style>
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
