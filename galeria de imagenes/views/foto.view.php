<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Slabo+27px&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/292551939c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilos.css">

    <title>Galeria</title>
</head>

<body>

    <header>

        <div class="contenedor">
            <h1 class="titulo">Foto:
                <?php if (!empty($foto['titulo'])) {
                    echo $foto['titulo'];
                } else {
                    echo $foto['imagen'];
                }
                ?>
            </h1>
        </div>

    </header>


    <div class="contenedor">
        <div class="foto"><img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
            <p class="texto"><?php echo $foto['texto'] ?></p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">Galeria creada por Matías Gattari con MySQL y PHP 8</p>
    </footer>


</body>

</html>