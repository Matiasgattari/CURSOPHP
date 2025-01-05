<?php

/* 
variable almacena datos bajo cierto nombre. recordar los ";". Las variables tienen que comenzar con "$", son sensibles a mayusculas y minusculas.
 Es conveniente mantener las variables en minusculas. No pueden llevar espacios ni comenzar por numeros, tampoco pueden llevar caracteres especiales
Podemos almacenar cadenas de textos (string), las cuales tienen que estar encerradas por " " o ' ' , aunque estas tienen diferencias. Las comillas dobles nos permiten llamar dentro otras variables
 Tambien numeros enteros, numeros decimales


 */

 //tipos de datos
$nombre = "carlos";
$numero_entero = 7;
$numero_decimal = 7.7;
$booleanof = false;
$booleanot = true;
$edad;  // si no le asignamos un tipo de dato, por defecto sera "null"

//otros tipos de datos: array, object class,null


echo $nombre;

echo "hola, $nombre";

//el "." se usa para concatenar cosas. pudiendo usarse comillas sensillas para el texto, y concatenarle al mismo una variable
echo 'hola, ' . $nombre;

echo $numero_entero;

echo $numero_decimal;


//para conocer el tipo de dato de una variable usamos "gettype", recibiendo como parametro nuestra variable
gettype($nombre);
//para mostrarlo por pantalla tengo que usar "echo"
echo gettype($nombre);

?>