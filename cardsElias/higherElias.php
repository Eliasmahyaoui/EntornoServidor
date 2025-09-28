<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

    <title>Higher</title>
</head>

<body>

    
    <div id="header-higuerElias">

        <h1>Higher Card</h1>
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc.php');
        ?>
    </div>


    <div id="contenido-higuerElias">
        <?php
        /*Aqui le pasamos la funcioon de getDesk */
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/getDeck.inc.php');

        /*Tendremos que crear la variable y dentro de la variable darle la funcion */
        $deck = generateFrenchDeck();


        /*Con la funcion shufle lo podnra aleatorio*/
        shuffle($deck);

        /*Esto es puntual para mostrarlo por ahora*/
        //echo var_dump($deck);

        //Se repartirá 10 cartas a cada jugador (creamos los jugadores)

        for ($i = 0; $i < 10; $i++) {
            //Aqui lo que hacemos es coger una carta de la baraja.
            $hand1[] = array_pop($deck);
            $hand2[] = array_pop($deck);
        }
        //ahora lo que hacemos es darla nombres a los dos jugaodres
        $player1 = "Harry";
        $player2 = "Voldemord";

        //ahora deberemos mostrar las cartas que tiene cada jugador.

        echo '<h2>' . $player1 . '</h2>';

        foreach ($hand1 as $card) {

            echo '<img src="/images/baraja/' . $card['image'] . '" alt="card">';
        }

        echo '<h2>' . $player2 . '</h2>';

        foreach ($hand2 as $card) {

            echo '<img src="/images/baraja/' . $card['image'] . '" alt="card">';
        }

        //Los puntos del jugador 1 y jugador 2
        $points1 = 0;
        $points2 = 0;

        //Recorremos cada carta individual
        for ($i = 0; $i < 10; $i++) {
            $card1 = $hand1[$i];
            $card2 = $hand2[$i];

            //Si la carta de la primera tiene comodin y la carta de la segunda tiene comodin se restarán 2 puntos al jugador que lleve más puntos.
            if ($card1['suit'] != 'comodin' && $card2['suit'] == 'comodin') {
                if ($points1 == $points2) {
                    $points1 -= 2;
                    $points2 -= 2;
                } else if ($points1 > $points2) {
                    $points1 -= 2;
                } else {
                    $points2 -= 2;
                }

                // Si las dos cartas tienen el mismo valor y no son comodinesse sumará un punto a cada jugador.
            } else if ($card1['value'] == $card2['value'] && $card1['suit'] != 'comodin' && $card2['suit'] != 'comodin') {

                $points1 += 1;
                $points2 += 1;
            }

            // Si una carta es mayor que la otra se sumarán 2 puntos al jugador con esa carta
            if ($card1['value'] > $card2['value']) {
                $points1 += 2;
            } else {
                $points2 += 2;
            }

            // Si una carta es un comodín y la otra no, se sumarán 2 puntos al jugador con elcomodín y se restará 1 punto al otro jugador.
            if ($card1['suit'] == 'comodin' && $card2['suit'] != 'comodin') {
                $points1 += 2;
                $points2 -= 1;
            } else if ($card2['suit'] == 'comodin' && $card1['suit'] != 'comodin') {
                $points2 += 2;
                $points1 -= 1;
            }
        }

        echo '<h2>' . "Resultado de la partida" . '</h2>';


        // Por último, se deberán mostrar las puntuaciones de los dos jugadores e
        echo '<strong>Puntuacion ' . $player1 . ' ' . $points1 . ' puntos<strong>';
        echo "<br>";
        echo 'Puntuacion ' . $player2 . ' ' . $points2 . ' puntos ';
        echo "<br>";

        // Indicar cuál de ellos ha ganado.
        if ($points1 > $points2) {
            echo 'Ganador ' . $player1;
        } else {
            echo 'Ganador ' . $player2;
        }
        ?>
    </div>


    <div id="footer-higuerElias">
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php');
        ?>
    </div>

</body>

</html>