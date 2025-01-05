<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre: "
                value="<?php if (!$enviado && isset($nombre))
                    echo $nombre ?>"> <br>

                <input type="email" id="correo" class="form-control" name="correo" placeholder="Correo: "
                    value="<?php if (!$enviado && isset($correo))
                    echo $correo ?>"> <br>

                <textarea name="mensaje" class="form-control" id="mensaje"
                    placeholder="Mensaje:"><?php if (!$enviado && isset($mensaje))
                    echo $mensaje ?></textarea> <br>


            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif ($enviado): ?>
                <div class="alert success">
                    <p> Enviado correctamente
                    <p>
                        <?php echo $enviado ?>
                </div>
            <?php endif ?>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo"> <br>
        </form>
    </div>

</body>

</html>