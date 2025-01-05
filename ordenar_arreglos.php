<?php

$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

//  La funcion SORT (recibe como parametro un arreglo), ordena de forma alfabetica los strings y ascendente los numeros 

sort($meses);

//La funcion RSORT (reverse sort), ordena de forma inversa al sort
rsort($meses);


//los numeros tambien pueden ordanrse
$numeros = array(1,22,3,4,15,6,88,9,10,13);

sort($numeros);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Meses del año</h1>
<!-- //por cada mes de MESES, mostrar el mes en una lista ordenada. Utiliza el CICLO FOREACH -->

<ul>
<?php
foreach($meses as $mes) {
    echo '<li>' . $mes . '</li>';
}
?>
</ul>

<h2>Numeros</h2>
<ul>
<?php
foreach($numeros as $numero) {
    echo '<li>' . $numero . '</li>';
}
?>
</ul>


</body>
</html>