<?php

$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');


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
<ul>
    <li>Enero</li>
    <li> <?php echo $meses[1]?></li>
</ul>


<!-- //por cada mes de MESES, mostrar "enero" -->
<ul>
<?php
foreach($meses as $mes) {
    echo $meses[0];
}
?>
</ul>

<!-- //por cada mes de MESES, mostrar el mes en una lista ordenada. Utiliza el CICLO FOREACH -->
<ul>
<?php
foreach($meses as $mes) {
    echo '<li>' . $mes . '</li>';
}
?>
</ul>



</body>
</html>