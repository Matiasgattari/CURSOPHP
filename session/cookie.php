<?php 
setcookie(name: 'font-size', value: '30px',expires_or_options: time() + 0,  path: '/'   );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie seteada</title>
    <style>
        p { font-size: 16px}
    </style>
</head>
<body>
<p>Aca se envia a la pagina donde se aprecia la cookie</p>
<a href="texto.php">Ir al texto</a>
</body>
</html>