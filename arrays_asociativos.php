<?php
//arreglos indexados son los que ubico por su numero index


//arreglos asociativos nos permite acceder a sus valores mediante asosiaciones de cadenas. funcionan igual que los indexados

$alex = array('telefono'=> '1130232225','edad' => 25,'apellido' => 'perez','pais' => 'mexico');

echo $alex['apellido'] . '<br />';
echo $alex['edad'] . '<br />';
echo $alex['telefono'] . '<br />';
echo $alex['pais'] . '<br />';


$alex['nombre'] = 'alex';

echo $alex['nombre']. '<br />';

echo 'El nombre de la persona es ' . $alex['nombre'] . ', y su edad es ' . $alex['edad'] . 'años';

?>