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
    
    ?>



    </div>









    




    <div id= footer-principal>
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php');
        ?>
    </div>

</body>

</html>