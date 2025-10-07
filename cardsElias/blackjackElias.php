<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blackjack</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php require_once "includes/header.inc.php"; ?>
<?php
require_once "includes/getdeck.inc.php";
?>

<?php
$deck = getDeck();

// quitamos comodines
array_pop($deck);
array_pop($deck);

// barajamos
shuffle($deck);

// jugadores (5 + banca)
$players = ["Jugador 1", "Jugador 2", "Jugador 3", "Jugador 4", "Jugador 5", "Banca"];
$hands = [];

// inicializar manos
for ($i = 0; $i < count($players); $i++) {
    $hands[$i] = [];
}

// repartir 2 cartas a cada jugador alternando
for ($round = 0; $round < 2; $round++) {
    for ($j = 0; $j < count($players); $j++) {
        $hands[$j][] = array_shift($deck);
    }
}

// ---- calcular puntos SIN funciones ----
$scores = [];
for ($j = 0; $j < count($players); $j++) {
    $sum = 0;
    $aces = 0;

    // contar primera suma
    for ($i = 0; $i < count($hands[$j]); $i++) {
        $value = $hands[$j][$i]["value"];

        if ($value == "J" || $value == "Q" || $value == "K") {
            $sum += 10;
        } elseif ($value == "1") { 
            $sum += 1;
            $aces += 1;
        } else {
            $sum += (int)$value;
        }
    }

    // mientras tenga menos de 14, añadir cartas
    while ($sum < 14) {
        $newCard = array_shift($deck);
        $hands[$j][] = $newCard;

        $value = $newCard["value"];
        if ($value == "J" || $value == "Q" || $value == "K") {
            $sum += 10;
        } elseif ($value == "1") {
            $sum += 1;
            $aces += 1;
        } else {
            $sum += (int)$value;
        }
    }

    // mejorar ases (si se puede subir a 11 sin pasarse de 21)
    for ($k = 0; $k < $aces; $k++) {
        if ($sum + 10 <= 21) {
            $sum += 10;
        }
    }

    $scores[$j] = $sum;
}

// banca es el último jugador
$dealerPoints = $scores[count($players) - 1];
?>
<h2>Juego de Blackjack</h2>

<?php
for ($j = 0; $j < 6; $j++) {
    echo "<div class='jugador'>";
    echo "<h3>" . $players[$j] . "</h3>";

    for ($i = 0; $i < 2; $i++) {
        echo "<img src='/images/baraja/" . $hands[$j][$i]["image"] . "'>";
    }

    echo "<p>Puntos: " . $scores[$j] . "</p>";

    if ($players[$j] != "Banca") {
        if ($scores[$j] > 21) {
            echo "<p>Resultado: Perdió</p>";
        } elseif ($dealerPoints > 21 && $scores[$j] <= 21) {
            echo "<p>Resultado: Ganó (la banca se pasó)</p>";
        } elseif ($scores[$j] > $dealerPoints && $scores[$j] <= 21) {
            echo "<p>Resultado: Ganó</p>";
        } elseif ($scores[$j] == $dealerPoints) {
            echo "<p>Resultado: Empate</p>";
        } else {
            echo "<p>Resultado: Perdió</p>";
        }
    }

    echo "</div>";
}
?>
<?php require_once "includes/footer.inc.php"; ?>
</body>
</html>
