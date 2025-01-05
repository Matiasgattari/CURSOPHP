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

$posts = obtener_post($blog_config['post_por_pagina'], $conexion); //esto lo envio al archivo admin_index.view.php 



require '../views/admin_index.view.php';





?>