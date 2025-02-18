<?php require "views/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
</head>

<body>

    <div class="contenedor">
        <?php echo "<h3> $titulo . Articulos encontrados: $cuenta</h3>"; ?>
        <?php foreach ($resultados as $post): ?>

            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['titulo'] ?></a>
                    </h2>
                    <p class="fecha"><?php echo fecha($post['fecha']) ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $post['id'] ?>"><img
                                src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'] ?>" alt=""></a>
                    </div>

                    <p class="extracto"><?php echo $post['extracto'] ?></p>
                    <a href="single.php?id=<?php echo $post['id'] ?>" class="continuar">Continuar leyendo...</a>
                </article>
            </div>

        <?php endforeach; ?>



        <?php require "paginacion.php"; ?>

    </div>

    <?php require "views/footer.php"; ?>

</body>

</html>