<?php

if (isset($_Get)) {

    $id = $_GET['id'];
    $nuevoUsuario = $_GET['nuevoUsuario'];

}


try {


    //creamos para trabajar aca una nueva base de datos que llamaremos prueba_datosmysqli, pero a la misma le tenemos que cambiar la "collation" a una que sea utf-8 para evitar problemas de lenguaje (el profesor eligio utf8_general_ci)


    //comandos para la creacion de la tabla por CONSOLA

    // ---ACCEDIENDO A MYSQL DESDE LA CONSOLA---

    // ctr + r  

    // cd /   

    // cd xampp/mysql/bin   


    // mysql -u root -p   // // Mi usuario creado es root y pw "" . al presionar enter pide la contraseña, al ingresarla bien te da la bienvenida a mysql

    // CREATE DATABASE prueba_datosmysqli;

    // use prueba_datosmysqli;

    // CREATE TABLE `usuarios` (`ID` INT NOT NULL AUTO_INCREMENT , `Nombre` VARCHAR(150) NOT NULL , `Edad` INT(3) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;

    // INSERT INTO `usuarios` (`ID`, `Nombre`, `Edad`) VALUES (NULL, 'Carlos', '23');




    //MYSQLi es por si no te gusta pdo o si tenes problemas de conexion con la misma. Para poder conectarse necesitamos crear una NUEVA INSTANCIA de mysql. se le dice asi a la base de datos que quieres trabajar con una

    $conexion = new mysqli(hostname: 'localhost', username: "root", password: "", database: "prueba_datosmysqli");

    echo $conexion->connect_errno;


    //Comprobar que no hay errores de conexion y continuar realizando tareas
    if ($conexion->connect_errno) {
        die("Lo siento, hubo un problema con el servidor" . " , código de error: " . $conexion->connect_errno);
    } else {

        //crear un usuario y mostrar los usuarios en pantalla (sin prepare statement)

        // $usuarioNuevo = $conexion->query("INSERT INTO `usuarios` (`ID`, `Nombre`, `Edad`) VALUES (NULL, 'Raul', '21');");
        //     $usuarios = $conexion->query('SELECT * FROM usuarios');

        //    foreach ($usuarios as $usuario) {
        //     print_r($usuario); 
        //     };



        // //Preparar consulta para traer TODOS los usuarios

        // $statement = $conexion->prepare('SELECT * FROM usuarios');

        // $statement->execute();

        // $resultados = $statement->fetch();

        // // foreach ($resultados as $usuario) {
        // //     echo 'Nombre: ' . $usuario['Nombre'] . ', ID: ' . $usuario['ID'] . '<br>';
        // // }
        // ;

        // print_r($resultados);


    }
    ;
    //Al ejecutar este codigo IF, lo que estoy haciendo es primero confirmar que haya o no un error de conexion. De haber un error de conexion (codigo distinto a 0 o null, este pasa a ejecutar la funcion DIE para terminar con la ejecucion de toda la pagina dando el mensaje que elijo. No es conveniente dar datos del error )



} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();

}




?>