<?php session_start();
//Archivo index para el admin

require 'config.php';
require '../functions.php';


$conexion = conexion($bd_config);

//Comprobar sesion
comprobarSession();

if (!$conexion) {
    header('location: ../error.php');
}
;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name']; //ruta del archivo cargado
    $file_name = $_FILES['thumb']['name']; // nombre del archivo cargado

    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name']; //esta variable guarda la ruta del archivo cuando este finalizado. de esta forma guardo en la carpeta /imagenes/nomrbe-del-archivo

    move_uploaded_file($thumb, $archivo_subido); //muevo el archivo de la computadora del usuario al servidor

    $statement = $conexion->prepare(
        'INSERT INTO articulos (id,titulo,extracto,texto,thumb) VALUES (null, :titulo, :extracto, :texto, :thumb)'
    );

    $statement->execute(array(':titulo' => $titulo, ':extracto' => $extracto, ':texto' => $texto, ':thumb' => $file_name));

    header('location: ' . RUTA . '/admin');
}


require '../views/nuevo.view.php';
?>