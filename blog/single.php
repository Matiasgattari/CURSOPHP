<?php
require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);


if (!$conexion) {
    header('location:error.php');
}


//envio al index si no ingresa id
if (empty($id_articulo)) {
    header('location:index.php');
}


$post = obtener_post_por_id($conexion, $id_articulo);

if (!$post) {
    header('location:index.php');
}

//se hace esto, ya que la funcion obtener_post_por_id me devuelve un arreglo en el cual la posicion 0 es realmente el arreglo que quiero utilizar
$post = $post[0];







require 'views/single.view.php';


?>