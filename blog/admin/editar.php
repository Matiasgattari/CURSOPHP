<?php session_start();
//Archivo index para el admin

require 'config.php';
require '../functions.php';


$conexion = conexion($bd_config);

//Comprobar sesion
comprobarSession();

if (!$conexion) {
    header('location: ../error.php');
}
;

//si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $titulo = limpiarDatos($_POST["titulo"]);
    $extracto = limpiarDatos($_POST["extracto"]);
    $texto = $_POST["texto"];
    $id = limpiarDatos($_POST["id"]);
    $thumb_guardada = $_POST["thumb-guardada"];
    $thumb = $_FILES["thumb"];


    if (empty($thumb['name'])) {
        $thumb = $thumb_guardada;
    } else {
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

        move_uploaded_file(from: $_FILES['thumb']['tmp_name'], to: $archivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }

    //subir todo a al base de datos

    $statement = $conexion->prepare('UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb WHERE id = :id');

    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $thumb,
        ':id' => $id,
    ));


    header('location: ' . RUTA . "/admin");


} else {
    //recibo el id del articulo por metodo get (url)
    $id_articulo = id_articulo($_GET['id']);

    //si no se recibe el id, redirigi a pagina de admin
    if (empty($id_articulo)) {
        header('location: ' . RUTA . '/admin');
    }

    $post = obtener_post_por_id($conexion, $id_articulo); //devuelve un arreglo dentro de otro arreglo. en el espacio 0 esta el posteo deseado

    if (!$post) {
        header('location: ' . RUTA . '/admin');
    }

    $post = $post[0];


} // en este caso el else, va a traer los datos del posteo ya creado, porque al momento de entrar a la pagina NO hemos presionado el boton de "modificar articulo", con lo cual el request_method es distinto a POST


require '../views/editar.view.php';
?>