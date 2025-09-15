<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
       <?php 
     require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc.php'
   ?>
     <div class="productos">
        <h2> <i>PRODUCTOS</i></h2>
        <p> <strong> Productos de LV </strong> </p>
        <p> Louis Vuitton ofrece una amplia gama de productos de lujo, incluyendo bolsos, maletas, ropa, calzado, accesorios y joyería. Sus diseños son reconocidos por su elegancia, calidad y el icónico monograma LV. La marca combina artesanía tradicional con innovación moderna para crear artículos exclusivos que reflejan un estilo de vida sofisticado. </p>
        <ol>
            <li><h4> Bolso trio Messenger </h4></li>
            <p>Precio de 2250€</p>
            <img src="img/louisvuittonBolsoTrioMessenger.avif" alt="Bolso 1">
            <li><h4> Bolso LV Neverfull </h4></li>
            <p>Precio de 3200€</p>
            <img src="img/louisvuittonbolsonever.png" alt="Bolso 2">
            <li><h4> Bolso LV luxury  </h4></li>
            <p>Precio de 1900€</p>  
            <img src="img/Bolso3.avif" alt="Bolso 3">
            <li><h4> Bolso LV Mini Bumbag </h4></li>
            <p>Precio de 1200€</p>          
            <img src="img/bolso44.avif" alt="Bolso 4 ">
            <li><h4> Bolso LV Ringtone </h4></li>
            <p>Precio de 2500€</p>  
            <img src="img/bolso5.avif" alt="Bolso 5" >
        </ol>
    </div>
     <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php'
        ?>
</body>

</html>