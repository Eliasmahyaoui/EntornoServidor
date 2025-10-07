<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Higher</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php
    require_once "includes/header.inc.php";
    ?>

    <?php
    require_once "includes/getdeck.inc.php";
    ?>

    <?php
    //Metemos dentro de la variable la funcion proporcionada de la IA 
    $deck = getDeck();

    //Barajamos la baraja con shuffle 
    shuffle($deck);

    //Le damos los nombres a los jugadores 
    $player1 = "Harry";
    $player2 = "Voldemort";

    //Inicializamos las manos, al principio estarán vacías.
    $hand1 = [];
    $hand2 = [];


    //Con un bucle for repartimos las cartas a las dos manos 10 veces
    for ($i = 0; $i < 10; $i++) {
        $hand1[] = array_shift($deck);
        $hand2[] = array_shift($deck);
    }

    //Variables para los puntos, al principio están vacías 
    $points1 = 0;
    $points2 = 0;
    ?>

    <h2><?php echo $player1 . ' vs ' . $player2 ?> </h2>
    
    <div class="jugador">
        <h3><?php echo $player1; ?></h3>
        <?php
        foreach ($hand1 as $card) {
            echo "<img src='images/baraja/" . $card['image'] . "'>";
        }
        ?>
    </div>

    <div class="jugador">
        <h3><?php echo $player2; ?></h3>
        <?php
        foreach ($hand2 as $card) {
            echo "<img src='images/baraja/" . $card['image'] . "'>";
        }
        ?>
    </div>

    <h2>Resultados</h2>

    <?php
    // Inicializar puntos
    $points1 = 0;
    $points2 = 0;

    // Calcular puntos de cada jugador
    foreach ($hand1 as $i => $card1) {
        $v1 = $card1["value"];
        $v2 = $hand2[$i]["value"];

        // Cambiar J Q K a 10
        if ($v1 == "J" || $v1 == "Q" || $v1 == "K") $v1 = 10;
        if ($v2 == "J" || $v2 == "Q" || $v2 == "K") $v2 = 10;

        if ($card1["suit"] == "comodin" && $hand2[$i]["suit"] == "comodin") {
            if ($points1 > $points2) $points1 -= 2;
            else $points2 -= 2;
        } elseif ($card1["suit"] == "comodin") {
            $points1 += 2;
            $points2 -= 1;
        } elseif ($hand2[$i]["suit"] == "comodin") {
            $points2 += 2;
            $points1 -= 1;
        } elseif ($v1 == $v2) {
            $points1 += 1;
            $points2 += 1;
        } elseif ($v1 > $v2) {
            $points1 += 2;
        } else {
            $points2 += 2;
        }
    }

    // Mostrar puntuación final
    echo "<p>Puntuación final: $player1 $points1 - $player2 $points2</p>";

    // Mostrar ganador
    if ($points1 > $points2) {
        echo "<p>Ha ganado $player1</p>";
    } elseif ($points2 > $points1) {
        echo "<p>Ha ganado $player2</p>";
    } else {
        echo "<p>Empate</p>";
    }
    ?>

    <?php require_once "includes/footer.inc.php"; ?>
</body>

</html>
