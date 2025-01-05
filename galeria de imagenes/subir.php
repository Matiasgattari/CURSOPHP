<?php
require "funciones.php";

$conexion = conexion("galeria_practica", "root", "");


if (!$conexion) {
    // header("location:error.php");
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES)) {
    $check = @getimagesize($_FILES["foto"]["tmp_name"]); //chequeo el tamaño de la imagen, como comprobacion de que realmente me subieron una imagen. la ruta de la imagen se guarda en "temporal name". da false si no tenemos imagen

    if ($check !== false) {
        $carpeta_destino = "fotos/";
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];


        //para subir la foto con la funcion siguiente : parametro 1 variable files con el valor de foto y tmp_name  y el destino donde lo queremos guardar
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);


        $statement = $conexion->prepare('INSERT INTO fotos (titulo,imagen,texto) values(:titulo,:imagen,:texto)');

        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'],
            ':texto' => $_POST['texto']
        ));

        header('location:index.php');
        // echo $archivo_subido;
    } else {
        $error = 'El archivo no es una imagen o es demasiado pesado';
    }
}



require "views/subir.view.php";