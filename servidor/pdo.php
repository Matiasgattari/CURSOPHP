<?php

if (isset($_Get)) {

    $id = $_GET['id'];
}



try {
    $conexion = new PDO(dsn: "mysql:host=localhost;dbname=prueba_datos", username: "root", password: "");

    // echo "Conectado correctamente <br />";

    // ------------- Traer datos por el metodo query, aun se usa pero no es recomendada, ya que este metodo te permite que el usuario inyecte codigo. ------------

    // $usuarios = $conexion->query('SELECT * FROM usuarios');

    // foreach ($usuarios as $usuario) {
    //     print_r($usuario); 
    //  };

    // foreach ($usuarios as $usuario) {
    //     echo 'ID: ' . $usuario['ID'] . ', Nombre: ' . $usuario['Nombre'] . '<br />';
    // }
    // ;


    // $usuarios = $conexion->query('INSERT INTO usuarios VALUES(null, "pedro")');


    $usuarios = $conexion->query('SELECT * FROM usuarios');

    foreach ($usuarios as $usuario) {
        echo 'ID: ' . $usuario['ID'] . ', Nombre: ' . $usuario['Nombre'] . '<br />';
    }
    ;


    //PARA recuperar el id de una query get desde el navegador

    // if($_GET['id']!=null) {

    //     $id = $_GET['id'];
//     $usuarios = $conexion->query("SELECT * FROM usuarios WHERE ID = $id");

    //      foreach ($usuarios as $usuario) {
//             echo 'ID: ' . $usuario['ID'] . ', Nombre: ' . $usuario['Nombre'] . '<br />';
//         }
//         ;


    // } else {
//     $usuarios = $conexion->query('SELECT * FROM usuarios');
//      foreach ($usuarios as $usuario) {
//         echo 'ID: ' . $usuario['ID'] . ', Nombre: ' . $usuario['Nombre'] . '<br />';
//     }
//     ;
// }





} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();

}





?>