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
            <h1 class="titulo">Subir foto</h1>
        </div>

    </header>


    <div class="contenedor">
        <form class="formulario" method="POST" enctype="multipart/form-data"
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">

            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">
            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">
            <label for="texto">Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

            <?php if (isset($error)): ?>
                <p class="error"> <?php echo $error; ?></p>
            <?php endif; ?>


            <input type="submit" value="Subir foto" class="submit">

        </form>
    </div>

    <footer>
        <p class="copyright">Galeria creada por Matías Gattari con MySQL y PHP 8</p>
    </footer>


</body>

</html>