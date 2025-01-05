<?php

//conexion a bbd

function conexion($bd_config)
{
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion;

    } catch (PDOException $e) {
        return false;
    }
}


//limpieza de datos - seguridad


function limpiarDatos($datos)
{
    $datos = trim($datos); //saca espacios en blanco
    $datos = stripslashes($datos); // saca barras invertidas
    $datos = htmlspecialchars($datos);//saca caracteres especiales
    $datos = strtolower($datos); // convierte a minusculas
    return $datos;

}
;



//traer post por ID

function pagina_actual()
{
    return isset($_GET['p']) ? (int) $_GET['p'] : 1;
}

function obtener_post($post_por_pagina, $conexion)
{
    $inicio = (pagina_actual() > 1) ? (pagina_actual() - 1) * $post_por_pagina : 0;

    // $sentencia = $conexion->prepare("SELECT * FROM articulos ");

    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT :inicio, :post_por_pagina");
    $sentencia->bindParam(':inicio', $inicio, PDO::PARAM_INT);
    $sentencia->bindParam(':post_por_pagina', $post_por_pagina, PDO::PARAM_INT);
    $sentencia->execute();

    return $sentencia->fetchAll();
    // return $inicio;
}
;

//id de articulos

function id_articulo($id)
{
    return (int) limpiarDatos($id);
}

//obtener post por id
function obtener_post_por_id($conexion, $id)
{
    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1"); // para ejecutar una consulta simple

    $resultado = $resultado->fetchAll();

    return ($resultado) ? $resultado : false;
}


//funcion para embellecer la fecha
function fecha($fecha)
{
    $timestamp = strtotime($fecha); // convierte de cadena de texto a fecha un string que le pasamos
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']; // arreglo para traducir el mes obtenido, valor de array de 0 - 11

    $dia = date('d', $timestamp); //obtengo el dia
    $mes = date('m', $timestamp) - 1; //obtengo el mes, le resto 1 para que coincida con el array de meses
    $year = date('Y', $timestamp); // obtengo el año. la Y debe ser si o si mayuscula

    $fecha = "$dia de " . $meses[$mes] . " del año $year";
    return $fecha;
}



//numero de paginas 
function numero_paginas($post_por_pagina, $conexion)
{
    //numero de filas que me devuelve la consulta
    $total_post = $conexion->prepare("SELECT FOUND_ROWS() as total"); //se guarda como total, esto se relaciona al sql_calc_found_rows, es ocmo lo llamo
    $total_post->execute();
    $total_post = $total_post->fetch(PDO::FETCH_ASSOC)['total'];

    //paginas de la paginacion
    $numero_paginas = ceil($total_post / $post_por_pagina); //ceil para redondear
    return $numero_paginas;
}


//comprobar sesiones
function comprobarSession()
{
    if (!isset($_SESSION['admin'])) {
        header('location: ' . RUTA);
    }
}

?>