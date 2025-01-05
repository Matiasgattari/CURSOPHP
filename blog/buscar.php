<?php
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: error.php');
}
;


if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conexion->prepare(
        'SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda'
    );
    $statement->execute(array(':busqueda' => "%$busqueda%")); //%$busqueda% representa buscar todos los textos que tengan la busqueda o antes o despues.

    $resultados = $statement->fetchAll(); //traigo los resultados

    if (empty($resultados)) {
        $titulo = "No se encontraron articulos con el resultado: " . $busqueda;
        $cuenta = 0;
    } else {
        $titulo = "Resultado de la busqueda: " . $busqueda;
        $cuenta = count($resultados);
    }

} else {
    header("location: " . RUTA . "/index.php");
} // si no se cumplen los requisitos de datos, manda al index.


require "views/buscar.view.php";

?>