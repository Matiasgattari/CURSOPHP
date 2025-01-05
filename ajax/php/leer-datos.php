<?php

error_reporting(0); //si tenemos errores, el archivo json no se carga bien. si pongo esta linea no se muestra el error como respuesta (ya que decidimos enviarlo en un array)

header('content-type: application/json; charset=utf-8'); // con esta linea de codigo, si recargo mi pagina, le decimos a la aplicacion que es un archivo JSON y como lo queremos trabajar

$conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');


if ($conexion->connect_errno) {
    // die();

    $respuesta = [
        'error' => true
    ];
} else {
    $conexion->set_charset("utf8"); // decirle que queremos trabajar con utf 8 para enviar y recibir datos

    //traer los datos
    $statement = $conexion->prepare("SELECT * FROM usuarios");
    $statement->execute();

    //obtengo resultados
    $resultados = $statement->get_result(); //trae los resultados de la base de datos aca

    //muestro los datos

    $respuesta = [];

    while ($fila = $resultados->fetch_assoc()) {
        $usuario = [
            'id' => $fila['id'],
            'nombre' => $fila['nombre'],
            'edad' => $fila['edad'],
            'pais' => $fila['pais'],
            'correo' => $fila['correo']

        ];
        array_push($respuesta, $usuario); //para pushear los arreglos a la variable "respuesta", el primer parametro es donde lo quiero sumar, y el segundo es el arreglo.
    }
    ;//creamos un arreglo por cada uno de los resultados




}


echo json_encode($respuesta); //para enviar la respuesta a la aplicacion que la solicito


?>