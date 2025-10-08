<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/functionselias.inc.php');
        
        //Declaramos dos numero saleaotrios para probar
        $a= rand(1,20);
        $b= rand(1,20);

       echo $a . " + " . $b . " = " . elias_add($a, $b);

        
        ?>
</body>

</html>