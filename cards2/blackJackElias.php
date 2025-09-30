<?php
require_once "includes/getdeck.inc.php";
$deck = getDeck();

// quitamos comodines
array_pop($deck);
array_pop($deck);

// barajamos
shuffle($deck);

// jugadores (5 + banca)
$jugadores = ["Jugador 1", "Jugador 2", "Jugador 3", "Jugador 4", "Jugador 5", "Banca"];
$manos = [];

// inicializar manos
for ($i=0; $i<count($jugadores); $i++) {
    $manos[$i] = [];
}

// repartir 2 cartas a cada jugador alternando
for ($ronda=0; $ronda<2; $ronda++) {
    for ($j=0; $j<count($jugadores); $j++) {
        $manos[$j][] = array_shift($deck);
    }
}

// ---- calcular puntos SIN funciones ----
$puntuaciones = [];
for ($j=0; $j<count($jugadores); $j++) {
    $suma = 0;
    $ases = 0;

    // contar primera suma
    for ($i=0; $i<count($manos[$j]); $i++) {
        $v = $manos[$j][$i]["value"];

        if ($v=="J" || $v=="Q" || $v=="K") {
            $suma = $suma + 10;
        } elseif ($v=="1") { 
            $suma = $suma + 1;
            $ases = $ases + 1;
        } else {
            $suma = $suma + (int)$v;
        }
    }

    // mientras tenga menos de 14, añadir cartas
    while ($suma < 14) {
        $cartaNueva = array_shift($deck);
        $manos[$j][] = $cartaNueva;

        $v = $cartaNueva["value"];
        if ($v=="J" || $v=="Q" || $v=="K") {
            $suma = $suma + 10;
        } elseif ($v=="1") {
            $suma = $suma + 1;
            $ases = $ases + 1;
        } else {
            $suma = $suma + (int)$v;
        }
    }

    // mejorar ases (si se puede subir a 11 sin pasarse de 21)
    for ($k=0; $k<$ases; $k++) {
        if ($suma + 10 <= 21) {
            $suma = $suma + 10;
        }
    }

    $puntuaciones[$j] = $suma;
}

// banca es el último jugador
$bancaPuntos = $puntuaciones[count($jugadores)-1];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blackjack</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php require_once "includes/header.inc.php"; ?>

<h2>Juego de Blackjack</h2>

<?php
for ($j=0; $j<6; $j++) {
    echo "<div class='jugador'>";
    echo "<h3>".$jugadores[$j]."</h3>";

    for ($i=0; $i<2; $i++) {
        echo "<img src='/images/baraja/" . $manos[$j][$i]["image"] . "'>";

    }

    echo "<p>Puntos: ".$puntuaciones[$j]."</p>";

    if ($jugadores[$j] != "Banca") {
        if ($puntuaciones[$j] > 21) {
            echo "<p>Resultado: Perdió</p>";
        } elseif ($bancaPuntos > 21 && $puntuaciones[$j] <= 21) {
            echo "<p>Resultado: Ganó (la banca se pasó)</p>";
        } elseif ($puntuaciones[$j] > $bancaPuntos && $puntuaciones[$j] <= 21) {
            echo "<p>Resultado: Ganó</p>";
        } elseif ($puntuaciones[$j] == $bancaPuntos) {
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
