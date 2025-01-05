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
            <h1 class="titulo">Mi galeria de imágenes</h1>
        </div>

    </header>


    <section class="fotos">
        <div class="contenedor">


            <?php foreach ($fotos as $foto): ?>
                <div class="thumb">

                    <div class="imagenes2">
                        <a href="foto.php?id=<?php echo $foto['ID'] ?>">
                            <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                    </div>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>


        <div class="paginacion">

            <?php if ($pagina_actual > 1): ?>
                <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i
                        class="fa-solid fa-arrow-left"></i>
                    Pagina Anterior</a>
            <?php endif; ?>

            <?php if ($total_paginas != $pagina_actual): ?>
                <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente <i
                        class="fa-solid fa-arrow-right"></i></a>
            <?php endif; ?>

        </div>
    </section>

    <footer>
        <p class="copyright">Galeria creada por Matías Gattari con MySQL y PHP 8</p>
    </footer>


</body>

</html>