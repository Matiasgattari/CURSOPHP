<!-- 
 las sesiones son variables que podemos utilizar en distintas paginas.

las cookies son pequeños archivos par clave valor, que guardan los sitios web en el ordenador del usuario  para poder cargar ciertas preferencias.



-->

<?php   

//creamos las sesiones
session_start(); //se agrega en todas las paginas a trabajar con sesiones

//variable superglobal
$_SESSION['nombre'] = 'Carlos';







?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessions</title>
</head>
<body>
    <h1>Pagina de inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la pagina 2</a>
    <a href="cookie.php">Crear / settear cookie</a>
</body>
</html>