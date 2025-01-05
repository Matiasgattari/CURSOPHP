<?php

if (isset($_Get)) {

    $id = $_GET['id'];
    $nuevoUsuario = $_GET['nuevoUsuario'];

}


try {

    //conexion a la base de datos con mis datos
    $conexion = new PDO(dsn: "mysql:host=localhost;dbname=prueba_datos", username: "root", password: "");



    // //CONSULTAS PREPARADAS evitando que el usuario pueda inyectar codigo en las consultas mysql.

    // //prepared statements (consultas preparadas)

    // $statement = $conexion->prepare('SELECT * FROM usuarios');

    // $statement->execute();


    // // prepared statements con place holder ":id" o ":nombre"

    // $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id OR nombre = :nombre');


    // $id = $_GET['id'] or 5;

    // $statement->execute( array(':id' => $id, ':nombre'=> 'christian')); //execute recibe un parametro en forma de arreglo, par clave valor.  nombre del placeholder => valor


    // // para mostrar en pantalla:

    // $resultados = $statement -> fetch(); //guardar el valor dentro de una variable. fetch solo nos va a traer un arreglo, fetchAll nos va a traer todos los arreglos

    // print_r($resultados);



    // //Preparar consulta para traer TODOS los usuarios

    // $statement = $conexion->prepare('SELECT * FROM usuarios');

    // $statement->execute();

    // $resultados = $statement -> fetchAll();

    // foreach($resultados as $usuario){
// echo 'Nombre: ' . $usuario['Nombre'] . ', ID: ' . $usuario['ID'] . '<br>';
// } ;

    // // print_r($resultados);



    // // Preparar consulta para insertar usuarios

    // $nuevoUsuario = 'Endy';

    // $statement2 = $conexion->prepare('INSERT INTO usuarios VALUES(null, :nombre)');

    // $statement2->execute(array(':nombre'=> $nuevoUsuario ));

    // // mosrtrar los resultados 

    // $statement = $conexion->prepare('SELECT * FROM usuarios');
// $statement->execute();
// $resultados = $statement -> fetchAll();

    // foreach($resultados as $usuario){
// echo 'Nombre: ' . $usuario['Nombre'] . ', ID: ' . $usuario['ID'] . '<br>';
// } ;



} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();

}




?>




<!-- 
CONSULTAS PREPARADAS evitando que el usuario pueda inyectar codigo en las consultas mysql.


//prepared statements

$statement = $conexion->prepare('SELECT * FROM usuarios');

$statement->execute();


// prepared statements con place holder id o nombre

$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id OR nombre = :nombre');


$id = $_GET['id'];

$statement->execute( array(':id' => $id, ':nombre'=> 'christian')); //execute recibe un parametro en forma de arreglo, par clave valor.  nombre del placeholder => valor


para mostrar en pantalla:

$resultados = $statement -> fetch(); //guardar el valor dentro de una variable. fetch solo nos va a traer un arreglo, fetchAll nos va a traer todos los arreglos

print_r(resultados);


//Preparar consulta para traer TODOS los usuarios


$statement = $conexion->prepare('SELECT * FROM usuarios');

$statement->execute();

$resultados = $statement -> fetchAll();

foreach($resultados as $usuario){
echo 'Nombre: ' . $usuario['nombre'] . ' ID: ' . $usuario['id'] '<br>';
} 


//Preparar consulta para insertar usuarios

$nuevoUsuario = $_GET['nuevoUsuario'];

$statement = $conexion->prepare('INSERT INTO usuarios VALUES(null, $nuevoUsuario)');

$statement->execute();

mosrtrar los resultados 

$resultados = $statement -> fetchAll();

foreach($resultados as $usuario){
echo 'Nombre: ' . $usuario['nombre'] . ' ID: ' . $usuario['id'] '<br>';
} 

-->