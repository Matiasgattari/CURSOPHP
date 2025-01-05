<?php


header('content-type: application/json; charset=utf-8'); // con esta linea de codigo, si recargo mi pagina, le decimos a la aplicacion que es un archivo JSON y como lo queremos trabajar


//con "echo" puedo devolver valores para ser utilizados cuando abro la peticion, con lo cual puedo enviar un json
// echo '[{"nombre": "raul"},{"nombre": "juan"}]';



$respuesta = [
    [
        'id' => '655f4dg5646sf46546s5f4',
        'nombre' => 'Carlos',
        'edad' => 25,
        'pais' => 'Mexico',
        'correo' => 'correo@correo.com'
    ],
    [
        'id' => '655f4dg5654sf46546s5f4',
        'nombre' => 'Raul',
        'edad' => 26,
        'pais' => 'Argentina',
        'correo' => '1@correo.com'
    ],
];

$respuesta = json_encode($respuesta); // es como el json.stringify pero version php


echo $respuesta;










?>