<?php require "views/header.php";
// la funcion nl2br() permite que se respeten los espacios en blanco conforme a se vayan agregando en el text area. Cuando encuentra un espaciado, le agrega un br al final
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"> <?php echo $post['titulo'] ?></h2>
                <p class="fecha"><?php echo fecha($post['fecha']) ?></p>
                <div class="thumb">
                    <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'] ?>"
                        alt="<?php echo $post['titulo'] ?>">
                </div>

                <p class="extracto"><?php echo nl2br($post['texto']) ?></p>

                <a href="index.php" class="continuar">Volver al inicio</a>
            </article>
        </div>



    </div>

    <?php require "views/footer.php"; ?>

</body>

</html>