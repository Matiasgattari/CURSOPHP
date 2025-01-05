<?php 

// codigo php requiere la "etiqueta" de inicio "<?php" y la de cierre "? >" (sin el espacio entre los caracteres) 
//"echo" nos permite mostrar cosas en pantalla, cierro con ";"

//comentarios permiten escribir notas para nosotros, que no se van a leer
# comentario de 1 linea
/*
comentario de varias lineas
*/

echo "hola mundo, solo php";

//puedo combinar html y php, haciendolo en partes separadas, o desde el mismo html con la etiqueta de php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola, soy un h1 de html</h1>
    <h2> <?php echo "h2 con php dentro de html";  ?> </h2>
</body>
</html>