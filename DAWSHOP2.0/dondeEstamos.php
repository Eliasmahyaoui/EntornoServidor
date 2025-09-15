<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donde Estamos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
 <?php 
     require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.inc.php'
   ?>

<div class="Contacto">
    <h1>Contacto</h1>
    <p>Si deseas ponerte en contacto con nosotros, puedes hacerlo a través de los siguientes medios:</p>

    <label for="contacto">Formulario de Contacto:</label>
         <p></p>
        <label for="nombre"><strong>Nombre</strong></label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="tel"><strong>Telefono</strong></label>
        <input type="number"  name="tel" required><br><br>

        <label for="email"><strong>Email</strong></label>
        <input type="email"  name="email" required><br><br>

        <label for="mensaje"><strong>Comentario</strong></label>
         <input type="text" name="Enviar" required><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    <br><br>    
    <h1>Información de Contacto</h1>
    <p>Puedes contactarnos a través de los siguientes medios:</p>
    <ul>
        <img src="img/maps.jpg" width="600">
        <li>Teléfono: +34 123 456 789</li>
        <li>Email:louisvuittoncompany@gmail.com</li>
        <li>Dirección: Calle de la Moda, 123, Ciudad de la Moda, País de la Moda</li>
    </ul>
</div>
      <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.inc.php'
        ?>
</body>
<hr>

</html>