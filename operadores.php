<?php
/*

Operadores aritmeticos
+ suma
- resta
* multiplicacion
/ division
% modulo = cuantas veces entra un valor, dentro de otro valor. no es muy util



Operadores de asignacion: nos permiten guardar valores
= asigna valor a la variable
+= Suma valor a la variable
-= Resta valor a la variable
*= Multiplica por el valor a la variable
/= Divide por el valor a la variable



Operadores de comparacion
==  igualdadad en valor
=== IDENTICO en valor y tipo de dato
> Mayor que 
> Menor que 
>= Mayor o igual
<= Menor o igual
!=, <> Diferente 
!== Totalmente diferente en valor y tipo de dato
! Negacion



Operadores logicos
and, &&   y o and evalua que se cumplan todas las condiciones
or, ||    o or evalua que se cumpla al menos 1 de las condiciones
xor       evalua que se cumpla solo una de las condiciones
!         



Operadores de incremento y decremento : agrega unidades de 1 en 1 a nuestras variables segun necesidad
++$x
$x++
--$x
$x--
La diferencia esta en que si agregamos los signos antes de la variable, la operacion pedida (suma o decremento) se va a realizar ANTES  que lo que siga en la ecuacion



Operadores de cadena: nos permiten concatenar
. 
.= 

No se puede concatenar con el "+" en PHP, por lo que debo usar el ".", esto es diferente en javascript

*/





/*
$numero = 10;
$numero2 =20;
$numero3= 30;
$numero4 = $numero3 +10;

$numero += 7 ;  resultado = 17
$numero = $numero + 4; Resultado = 17 + 4 = 21

$resultado = $numero + $numero2;
echo $resultado;
*/


/*
//operador incremento/decremento
$numero =10;
// $numero++;
echo 'incremento ++ posterior a $numero' . $numero++ . '<br />';

echo 'incremento numero anterior a $numero' . ++$numero  . '<br />';
*/

/*
$texto ='hola';
$texto2= 'chau';

// echo $texto . $texto2;
$texto .= ' chau';

echo $texto;
*/

?>
