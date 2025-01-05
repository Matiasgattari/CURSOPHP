<!-- logica del programa -->

<?php
// con este codigo cargo el html de la otra vista



try {
    // $conexion = new mysqli(hostname: 'localhost', username: "root", password: "", database: "paginacion_practica");

    try {
        $conexion = new PDO(dsn: 'mysql:host=localhost;dbname=paginacion_practica', username: 'root', password: '');

    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
        die();
    }
    ;


    $pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;

    $postPorPagina = 3;

    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;


    $articulos = $conexion->prepare(query: "SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio,$postPorPagina");

    // SQL_CALC_FOUND_ROWS nos trae el calculo de cuantos articulos tenemos. cuantas filas hay en total en la bdd.
    //$inicio y $postPorPagina me estan diciendo desde donde inicia a traerme los articulos y cuantos articulos quiero que me traiga

    $articulos->execute();
    $articulos = $articulos->fetchAll();
    // print_r($articulos);

    if (!$articulos) {
        header('location: index.php');
    }

    //con esto se trae el total de articulos en la bdd para saber cuantas pagians tengo que crerar. Esto es algo mecanico que se hace asi, y tiene relacion al SQL_CALC_FOUND

    $totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');

    $totalArticulos = $totalArticulos->fetch()['total'];

    $calculo = $totalArticulos / $postPorPagina;
    $numeroPaginas = ceil($calculo);

    // echo $totalArticulos;
    // echo $numeroPaginas;
    ;

} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    die();
}


require 'index.view.php';