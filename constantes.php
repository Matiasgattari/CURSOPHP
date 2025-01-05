<?php

//con alt + z ajusto el texto a la pantalla "text wrap"

//una constante, a dif de una variable, nos permite establecerle un valor a la misma y usarlo todas las veces que necesite, pero no puedo cambiarlo. las variavbles son globales, pudiendo accederse a ella desde cualquier parte del codigo

$nombre = 'carlos';
$nombre = 'arturo';
//en este caso el valor de la variable cambia, si la llamo se muestra arturo

//constante... "define" es una funcion, que recibe parametros (parametro 1 "nombre", parametro 2 "valor"). El nombre de la constante lo coloco con MAYUSCULAS o minusculas, mejor con mayusculas, y para llamarla no debo utilizar comillas ni $
define('PI', 3.14);

echo PI;


?>