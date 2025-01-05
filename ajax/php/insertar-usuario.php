<?php
//recibe los archivos de la base de datos

error_reporting(0); //si tenemos errores, el archivo json no se carga bien. si pongo esta linea no se muestra el error como respuesta (ya que decidimos enviarlo en un array)

header('content-type: application/json; charset=utf-8'); // con esta linea de codigo, si recargo mi pagina, le decimos a la aplicacion que es un archivo JSON y como lo queremos trabajar

$nombre = $_POST['nombre']; //recibo el nombre por el metodo post del archivo main.js 
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];


//validacion y limpieza de datos recibidos

function validarDatos($nombre, $edad, $pais, $correo)
{

    if ($nombre == '') {
        return false;
    } else if ($edad == '' || is_int($edad)) {
        return false;
    } else if ($pais == '') {
        return false;
    } else if ($correo == '') {
        return false;
    } // hago los "return false;" para que se corte la ejecucion del codigo
    return true; //si todo fue valido
}

if (validarDatos($nombre, $edad, $pais, $correo)) {


    //conexion
    $conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');
    $conexion->set_charset('utf8');

    //comprobar errores en la conexion a la base de datos
    if ($conexion->connect_errno) {
        $respuesta = ['error' => true];
    } else {
        //si no tengo errores ejecuto toda la sentencia SQL
        $statement = $conexion->prepare("INSERT INTO usuarios (nombre, edad, pais, correo) VALUES (?,?,?,?)");

        $statement->bind_param("siss", $nombre, $edad, $pais, $correo); //"siss significa string integer string string

        $statement->execute();

        //confirmo que se recibieron los datos correctamente
        if ($conexion->affected_rows <= 0) {
            $respuesta = ['error' => true, 'mensaje' => 'No se agregaron filas'];
        }
        //seteo la respuesta como un array vacio si todo el codigo estuvo perfecto
        $respuesta = [];
    }



} else {
    $respuesta = ['error' => true];
}

//hacer un archivo json con la respuesta
echo json_encode($respuesta); //en este caso "respuesta", si no hay ningun error, va a ser un valor nulo o un array vacio segun como lo definamos

?>