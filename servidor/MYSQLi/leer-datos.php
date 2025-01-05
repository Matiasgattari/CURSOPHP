<?php

if (isset($_Get)) {
    // $id = $_GET['id'];
    // $nuevoUsuario = $_GET['nuevoUsuario'];
}

try {

    //Conexion con MYSQLi 

    $conexion = new mysqli(hostname: 'localhost', username: "root", password: "", database: "prueba_datosmysqli");


    //Comprobar que no hay errores de conexion y continuar realizando tareas
    if ($conexion->connect_errno) {
        die("Lo siento, hubo un problema con el servidor" . " , código de error: " . $conexion->connect_errno);
    } else {


        // queremos ejecutar una sentencia SQL
        $sql = 'SELECT * FROM usuarios'; //esto es una cadena de texto que guardamos en nuestra variable "sql". Esta misma por ejemplo, puede ser limitada dejando que solamente traiga 2 usuarios la consulta :  'SELECT * FROM usuarios LIMIT 2'; 
        $resultado = $conexion->query(query: $sql); //de esta forma ejecuto la consulta que quiero, en la base de datos. Lo guardo en una variable el resultado


        //$resultado->num_rows   accediendo aca obtengo el numero de filas que me devuelve la consulta sql y la conexion
        if ($resultado->num_rows > 0) {


            // $resultado->fetch_assoc(); 
            //quiero que me muestres UNA FILA del resultado. Esto me devuelve un arreglo que contiene los nombres de las columnas (claves) con los valores de las mismas. Esta linea trae SOLAMENTE 1 resultado. Puedo llegar a mostrarlo con un var_dump($resultado). Como es un arreglo, puedo traer valores especificos si conozco las llaves ej $resultado->fetch_assoc()['Nombre']. Si lo asocio a la variable $resultado, este mismo va a ser unico, pero si no lo asocio a una variable, cada vez que se ejecute el codigo mostrara el siguiente usuario, ej unico $resultado = $resultado->fetch_assoc();


            // echo '<pre>';

            // var_dump($resultado->fetch_assoc());
            // var_dump($resultado->fetch_assoc()['ID']);
            // var_dump($resultado->fetch_assoc()['Nombre']);

            // echo '<pre>';



            //mientras que haya resultados de nuestra secuencia SQL (ya que el valor 0 se toma como null y para la ejecucion)    $resultado->fetch_assoc()   .  Al agregar el $fila =  .... Lo que hago es que cada uno de estos resultados se cargue en la variable FILA, para acceder a ella mas facilmente, y es un arreglo.

            while ($fila = $resultado->fetch_assoc()) {
                echo 'ID: ' . $fila['ID'] . ', Usuario: ' . $fila['Nombre'] . '<br>';
            }
            ;


        } else {
            echo 'No hay información disponible.';
        }
        ;
    }


} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();

}




?>