<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Black Jack</title>
</head>

<body>

    <div id="header-principal">
        <h1>Black Jack Elias</h1>
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc.php');
        ?>
    </div>

    <div id="contenido-principal">
        <?php
        /* Aquí metemos la función que nos han dado */
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/getDeck.inc.php');

        /* Generamos el mazo */
        $deckRaw = generateFrenchDeck();

        /* Transformamos el mazo para que tenga 'name', 'value' numérico y 'image' */
        $deck = [];
        foreach ($deckRaw as $card) {
            $name = $card['value'];
            if ($name === 'J' || $name === 'Q' || $name === 'K') {
                $value = 10;
            } elseif ($name === '1') { // As
                $name = 'AS';
                $value = 11;
            } else {
                $value = (int)$name;
            }
            $deck[] = [
                'name' => $name,
                'value' => $value,
                'image' => $card['image']
            ];
        }

        /* Mezclamos las cartas */
        shuffle($deck);

        /* Definimos jugadores */
        $players = ["Jordi", "Dembele", "Dani", "Alex", "Elias", "Banca"];

        /* Repartimos dos cartas a cada jugador */
        $hands = [];
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < count($players); $j++) {
                $hands[$players[$j]][] = array_pop($deck);
            }
        }

        /* Función para calcular puntos, As puede valer 1 o 11 */
        function calculatePoints($cards)
        {
            $sum = 0;
            $aces = 0;

            foreach ($cards as $card) {
                $sum += $card['value'];
                if ($card['name'] === 'AS') {
                    $aces++;
                }
            }

            while ($sum > 21 && $aces > 0) {
                $sum -= 10; // Contar As como 1
                $aces--;
            }

            return $sum;
        }

        /* Repartir cartas extra mientras puntos < 14 */
        foreach ($players as $player) {
            while (calculatePoints($hands[$player]) < 14 && count($deck) > 0) {
                $hands[$player][] = array_pop($deck);
            }
        }

        /* Calcular puntos finales */
        $points = [];
        foreach ($players as $player) {
            $points[$player] = calculatePoints($hands[$player]);
        }

        /* Mostrar cartas de cada jugador como imágenes */
        foreach ($hands as $playerName => $cards) {
            echo "<strong>$playerName:</strong> ";
            foreach ($cards as $card) {
                echo '<img src="/images/baraja/' . $card['image'] . '" alt="card">';
            }
            echo "<br>";
        }


        /* Comparar jugadores con la banca */
        $bancaPoints = $points['Banca'];
        foreach ($players as $player) {
            if ($player === 'Banca') continue;

            echo $player . " tiene " . $points[$player] . " puntos. ";

            if ($points[$player] > 21) {
                echo "Ha perdido.<br>";
            } elseif ($points[$player] > $bancaPoints || $bancaPoints > 21) {
                echo "Ha ganado.<br>";
            } elseif ($points[$player] < $bancaPoints) {
                echo "Ha perdido.<br>";
            } else {
                echo "Empate.<br>";
            }
        }
        ?>
    </div>

    <div id="footer-principal">
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php');
        ?>
    </div>

</body>

</html>