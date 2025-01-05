<?php 
if(isset($_COOKIE['font-size'])){
    $tamaño = $_COOKIE['font-size'];
} else {
    $tamaño = '20px';
}


echo 'el tamaño de fuente es de ' . $tamaño


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEXTO</title>
    <style>
        p { font-size: <?php echo $tamaño ?>}
    </style>
</head>
<body>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem delectus voluptas nihil adipisci dicta voluptate.</p>
<a href="cookiedestroy.php">Ir a borrar cookie</a>
</body>
</html>