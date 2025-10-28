<?php

//includes 2 (Ejercicio 2)

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes2/customer.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes2/order.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes2/pizza.inc.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen </title>
</head>
<body>
   <?php

//Creamos el objeto pizza 
$pizza1= new Pizza("Barbacoa", 12.0, "mm");
$pizza1= new Pizza("Carbonara", 14.5, "XL");
$pizza1= new Pizza("Margarita", 9.5, "XL");
$pizza1= new Pizza("Hawaiana", 10.0, "S");
$pizza1= new Pizza("Personalizada", 15.5, "L");
$pizza1= new Pizza("Personalizada", 15.5, "L");

//creamos clientes 
$customer1= new Customer("Rick", true);


//añade el pedido al cliente Rick 
$pizza1= $this->addCustomer($customer1);


echo $customer1;


//Nombre 
$namePedido="pedidio Rick";
$descuento= $pizza->discount;


   ?>
    
</body>
</html>