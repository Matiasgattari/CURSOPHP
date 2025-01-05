<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Slabo+27px&display=swap"
        rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Slabo+27px&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/292551939c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
    <!-- le coloco la ruta de esa forma, para que en todos los archivos se acceda de la misma forma, indistinto de que ruta tenga el archivo -->

</head>

<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">

                <p><a href="<?php echo RUTA; ?>">Mi primer blog</a></p>


            </div>


            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>



                </form>


                <nav class="menu">

                    <ul>
                        <li><a href="http://www.twitter.com"><i class="fa-solid fa-x"></i> Twitter </a></li>
                        <li><a href="http://www.facebook.com"><i class="fa-solid fa-user"></i> Facebook </a></li>
                        <li><a href="http://www.gmail.com"><i class="fa-solid fa-address-book"></i> Contacto </a></li>
                    </ul>
                </nav>


            </div>


        </div>
    </header>
</body>

</html>