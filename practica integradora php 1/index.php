<?php
$errores = "";
$enviado = "";

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

    } else {
        $errores .= 'Por favor ingresa un nombre <br />';
    }
    ;


    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor, ingresa un correo válido <br />';
        }
    } else {
        $errores .= 'por favor ingresa un correo <br />';
    }
    ;


    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= 'Por favor ingresa un mensaje <br />';
    }


    if (!$errores) {
        $enviar_a = 'tuempresa@gmail.com'; //donde me envian los formularios
        $asunto = 'Correo enviado desde mipagina.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: " . $mensaje;

        // mail($enviar_a,$asunto,$mensaje_preparado); //funciona solo en hosting, no con panel de control como xampp

        $enviado .= $mensaje_preparado;
    }



}
;



// para "importar" el archivo de la estructura html
require 'index.view.php';




?>