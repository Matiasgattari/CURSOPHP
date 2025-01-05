<?php
//los arreglos son variables que nos permiten almacenar multiples valores, su sintaxys es la siguiente:

$semana = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');

//permiten almacenar el valor que queramos
//para acceder a los valores se hace de la siguiente forma [index], teniendo en cuenta que el index comienza en el valor "0"

// echo $semana[1];

//tanmbien puedo asignar nuevos valores al array. tambien puedo sobreescribir los valores ya guardados, accediendo a la posicion index del mismo

$semana[7] = 'osvaldo';

// '<br />'
// al concatenar con "." la linea de texto '<br />', el navegador lo interpreta como texto html para salto de linea
echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';

//ejemplo 2
// $arreglo = [];
// echo $arreglo;


//ejemplo 3
$arreglo2 = ['lunes','martes','miercoles','jueves','viernes','sabado','domingo'];
echo $arreglo2[1];








?>