<?php
require_once "includes/getdeck.inc.php";
$deck = getDeck();
shuffle($deck);

$jugador1 = "Harry";
$jugador2 = "Voldemort";

$mano1 = [];
$mano2 = [];

for ($i = 0; $i < 10; $i++) {
    $mano1[] = array_shift($deck);
    $mano2[] = array_shift($deck);
}

$puntos1 = 0;
$puntos2 = 0;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Higher</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php require_once "includes/header.inc.php"; ?>

    <h2><?php echo $jugador1; ?> vs <?php echo $jugador2; ?></h2>

    <div class="jugador">
        <h3><?php echo $jugador1; ?></h3>
        <?php
        foreach ($mano1 as $carta) {
            echo "<img src='images/baraja/" . $carta['image'] . "'>";
        }


        ?>
    </div>

    <div class="jugador">
        <h3><?php echo $jugador2; ?></h3>
        <?php
        foreach ($mano2 as $carta) {
            echo "<img src='images/baraja/" . $carta['image'] . "'>";
        }

        ?>
    </div>

    <h2>Resultados</h2>

<?php
// Inicializar puntos
$puntos1 = 0;
$puntos2 = 0;

// Calcular puntos de cada jugador
foreach ($mano1 as $i => $carta1) {
    $v1 = $carta1["value"];
    $v2 = $mano2[$i]["value"];

    // Cambiar J Q K a 10
    if ($v1 == "J" || $v1 == "Q" || $v1 == "K") $v1 = 10;
    if ($v2 == "J" || $v2 == "Q" || $v2 == "K") $v2 = 10;

    if ($carta1["suit"] == "comodin" && $mano2[$i]["suit"] == "comodin") {
        if ($puntos1 > $puntos2) $puntos1 -= 2;
        else $puntos2 -= 2;
    } elseif ($carta1["suit"] == "comodin") {
        $puntos1 += 2;
        $puntos2 -= 1;
    } elseif ($mano2[$i]["suit"] == "comodin") {
        $puntos2 += 2;
        $puntos1 -= 1;
    } elseif ($v1 == $v2) {
        $puntos1 += 1;
        $puntos2 += 1;
    } elseif ($v1 > $v2) {
        $puntos1 += 2;
    } else {
        $puntos2 += 2;
    }
}

// Mostrar puntuación final
echo "<p>Puntuación final: $jugador1 $puntos1 - $jugador2 $puntos2</p>";

// Mostrar ganador
if ($puntos1 > $puntos2) {
    echo "<p>Ha ganado $jugador1</p>";
} elseif ($puntos2 > $puntos1) {
    echo "<p>Ha ganado $jugador2</p>";
} else {
    echo "<p>Empate</p>";
}
?>

    
    

    <?php require_once "includes/footer.inc.php"; ?>
</body>

</html>