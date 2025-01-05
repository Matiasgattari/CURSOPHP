<?php
require "funciones.php";

$conexion = conexion("galeria_practica", "root", "");


if (!$conexion) {
    // header("location:error.php");
    die();
}


$id = isset($_GET["id"]) ? (int) $_GET["id"] : false;

if (!$id) {
    header("location:index.php");
}

$statement = $conexion->prepare("SELECT * FROM  fotos WHERE ID =:id");
$statement->execute(array(":id" => $id));

$foto = $statement->fetch(PDO::FETCH_ASSOC);
if (!$foto) {
    header("location:index.php");
}



require "views/foto.view.php";