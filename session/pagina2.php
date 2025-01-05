<?php   

//creamos las sesiones
session_start(); 

if ($_SESSION) {
    $nombre = $_SESSION["nombre"];
} else {
  $nombre = "no has iniciado sesion";
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <h1>Hola,  <?php echo $nombre ?>   </h1>
    <p></p>
    <a href="cerrar.php">cerrar sesion</a>
</body>
</html>