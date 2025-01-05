<?php
require "funciones.php";

//REQUERIMIENTOS PARA LA PAGINACION

$fotos_por_pagina = 3;

$pagina_actual = (isset($_GET["p"])) ? (int) $_GET["p"] : 1;

$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;


//CONEXION A LA BASE DE DATOS

$conexion = conexion("galeria_practica", "root", "");

if (!$conexion) {
    die("");
}
;


//PREPARO LA CONSULTA SQL


$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio,$fotos_por_pagina");

$statement->execute();
$fotos = $statement->fetchAll(); //guarda las rutas de las fotos cargadas en la base de datos. Almacena todas las fotos que tenemos en diferentes arreglos

if (!$fotos) {
    // header("location:error.php");
    header("location:index.php");

}


//CALCULO LAS PAGINAS PARA LA PAGINACION


$statement = $conexion->prepare("SELECT FOUND_ROWS()  as total_filas");
$statement->execute();

$total_post = $statement->fetch()["total_filas"];

$total_paginas = ceil($total_post / $fotos_por_pagina);




require "views/index.view.php";