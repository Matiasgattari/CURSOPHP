<?php

function conexion($tabla, $usuario, $password)
{

    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $password);
        // Establecer el modo de error de PDO para que genere excepciones
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conexión realizada con éxito";
        return $conexion;
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

}