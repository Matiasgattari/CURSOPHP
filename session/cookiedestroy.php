<?php 
setcookie(name: 'font-size',value: '30px', expires_or_options: time() - 60,  path: '/'   );

print_r($_COOKIE);


if (isset($_COOKIE['font-size'])) {
    $tamaño = $_COOKIE['font-size'];
} else {
    $tamaño = '16px';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie borrada</title>
    <style>
        p { font-size: <?php echo $tamaño ?>}
    </style>
</head>
<body>
<p>Cookie borrada correctamente</p>
<a href="texto2.php">Ver cookie borrada</a>
</body>
</html>


<?php print_r($_COOKIE) ?>