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
        /*Aqui metemos la funcion que nos han dado */
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/getDeck.inc.php');

        /*guardamos el array de cartas en deck. Array de cartas viene de la funcion generada con IA*/
        $deck = generateFrenchDeck();

        /*Esta funcion/método array_pop lo que hace es coger la ultima posicion de la carta*/
        array_pop($deck);

        /*Ahora queremos que se ordene aleaotoriamente el array de cartas, con la funcion shuffle*/
        shuffle($deck);

        /* El juego dispondra de 5 jugadores y la banca (6 en total)*/
        $players= ["Jordi", "Dembele", "Dani", "Alex", "Elias", "Banca"];

        /*Se le repartirá dos cartas a cada jugadorextrayéndolas del array funciones: shift_pop o
        array_shift) alternativamente (una a cada jugador cada vez).*/

        $hands=[];

        foreach ($players as $player) {
            $hands[$player]= [];
        }
        
        foreach ($players as $player) {
            $hands[$player][]= array_pop($deck);
            $hands[$player][]= array_pop($deck);
            
        
        }
            

        ?>



    </div>














    <div id=footer-principal>
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php');
        ?>
    </div>

</body>

</html>