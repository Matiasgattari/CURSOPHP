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


$id = limpiarDatos($_GET['id']);
if (!$id) {
    header('location: ' . RUTA . "/admin");
}

$statement = $conexion->prepare("DELETE FROM articulos WHERE id = :id");
$statement->execute(array(":id" => $id));

header("location: " . RUTA . "/admin");

?>