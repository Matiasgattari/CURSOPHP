<?php require "../views/header.php"; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Nuevo articulo
            </h2>

            <form class="formulario" method="POST" enctype="multipart/form-data"
                action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">


                <input type="text" name="titulo" placeholder="Titulo del articulo">
                <input type="text" name="extracto" placeholder="Extracto del articulo">
                <textarea name="texto" placeholder="Texto del articulo"></textarea>
                <input type="file" name="thumb">
                <input type="submit" value="Crear articulo">


            </form>

        </article>
    </div>

</div>


<?php require "../views/footer.php"; ?>