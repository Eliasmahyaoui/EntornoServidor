<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher</title>
</head>
<body>
    
    <h1>higher Elias</h1>

    
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc.php');
   

    /*Aqui le pasamos la funcioon de getDesk */
     require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/getDeck.inc.php');
    /*Tendremos que crear la variable y dentro de la variable darle la funcion */
    $deck=generateFrenchDeck();
    /*Con la funcion shufle lo podnra aleatorio*/ 
    shuffle($deck);
    /*Esto es puntual para mostrarlo por ahora*/
    //echo var_dump($deck);

    //Se repartirá 10 cartas a cada jugador (creamos los jugadores)
    
    for ($i=0; $i <=10 ; $i++) { 
        //Aqui lo que hacemos es coger una carta de la baraja.
        $hand1[] = array_pop($deck);    
        $hand2[] =array_pop($deck); 
    }
    //ahora lo que hacemos es darla nombres a los dos jugaodres
    $player1= "Harry";
    $player2="Voldemord";

    //ahora deberemos mostrar las cartas que tiene cada jugador.

    echo '<h2>'. $player1 .'</h2>';

    foreach ($hand1 as $card) {
        // echo $card['value'] .'-'. $card['suit'];
        // echo $card['image'];
        echo '<img src="/images/baraja/'.$card['image'].'" alt="card">';

        echo '<br>';
    }
    


    ?>

    <img src="" alt="">
 <?php


    require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php');

    ?>

</body>
</html>