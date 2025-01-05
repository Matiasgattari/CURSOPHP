<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/292551939c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio de sesion</title>
</head>

<body>
    <div class="contenedor">

        <h1 class="titulo">Iniciar sesion</h1>

        <a href="cerrar.php">Cerrar Sesión</a>

        <hr class="border">



        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST" class="formulario"
            name="login">

            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i> <input type="text" name="usuario" class="usuario"
                    placeholder="Usuario">

            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i> <input type="password" name="password" class="password_btn"
                    placeholder="Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>

            </div>


            <?php if (!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </form>

        <p class="texto-registrate"> ¿Aun no tienes cuenta?</p>
        <a href="registrate.php">Regístrate</a>

    </div>


</body>

</html>