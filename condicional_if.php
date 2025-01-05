<?php
/*
los conficionales nos permiten tomar decisiones a la hora de programar. muy similar a otros lenguajes.Nos permiten tomar decisiones en base a condiciones que hayamos puesto
sintaxis
if(condicion true o false){
    //instrucciones
}


Operadores de comparacion
== igualdad
> Mayor que 
> Menor que 
> Mayor o igual
< Menor o igual
!= Diferente 
! Negacion

Operadores logicos
&&  y o and evalua que se cumplan todas las condiciones
or  o or  evalua que se cumpla al menos 1 de las condiciones
|| o or evalua que se cumpla al menos 1 de las condiciones
xor  evalua que se cumpla solo una de las condiciones

*/

$nombre ='Carlos';

$edad = 18;
if($edad >= 18 && $nombre == 'Carlos'){
    echo '<h1> Bienvenido Carlos </h1>';
};

if($edad < 18) {
    echo '<h1> Eres menor de edad </h1>';
};



?>
