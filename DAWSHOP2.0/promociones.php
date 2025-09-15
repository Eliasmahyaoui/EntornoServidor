<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <?php 
     require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc.php'
   ?>
    <div class="promociones">
        <h1>Lista de promociones fin de temporada</h1>
        <p><b>Aqui te dejo las siguientes promociones de final de temporada:</b></p>
        <ol >
            <li>
                <strong>Bolso trio Messeneger:</strong>
                Antes: 2250€  Ahora: 1500€
                <img src="img/louisvuittonBolsoTrioMessenger.avif">
                  
            </li>
            <br>
            <li>
                <strong>Bolso Neverfull:</strong>
                Antes: 3200€  Ahora: 2500€
                <img src="img/louisvuittonbolsonever.png">
            </li>
            <br>
            <li>
                <strong>Bolso mini bumbag:</strong>
                Antes: 1200€  Ahora: 800€
                <img src="img/LVBolso4.avif">
            </li>

        </ol>   
    </div>
         <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php'
        ?>
</body>
</html>