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
>= Mayor o igual
<= Menor o igual
!= Diferente 
! Negacion

Operadores logicos
&&  y o and evalua que se cumplan todas las condiciones
or  o or  evalua que se cumpla al menos 1 de las condiciones
|| o or evalua que se cumpla al menos 1 de las condiciones
xor  evalua que se cumpla solo una de las condiciones



ELSE nos permite que si una condicional no se cumple, se ejecute otro fragmento de codigo

Puedo ir agregando condicionales if dentro de otros (IF ANIDADO)
*/

// $mes= 'diciembre';
// $mes= 'enero';
$mes= 'asd';

$nombre ='Carlos';
$edad = 18;

if($edad >= 18){
    echo '<h1> Bienvenido</h1>';
}else {
    echo '<h1> Eres menor de edad </h1>';
};

//ELSE IF si el if anterior no se cumple, pasa al siguiente. cierro con un else que abarca todas las negativas


if($mes == 'diciembre'){
    echo 'Feliz navidad';
}else if($mes=='enero'){
        echo 'feliz año nuevo';
    } else{echo 'El mes que pusiste no se festeja';}

?>
