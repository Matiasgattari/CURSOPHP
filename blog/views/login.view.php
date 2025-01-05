<?php require "views/header.php"; ?>


<!DOCTYPE html>
<html lang="en">

<body>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"> Iniciar Sesion</h2>

                <form class="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">


                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="password" placeholder="Contraseña">
                    <input type="submit" value="Iniciar sesion">




                </form>


            </article>
        </div>



    </div>
</body>

</html>







<?php require "views/footer.php"; ?>