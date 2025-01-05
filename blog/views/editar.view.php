<?php require "../views/header.php"; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Editar articulo
            </h2>

            <form class="formulario" method="POST" enctype="multipart/form-data"
                action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <input type="text" name="titulo" value="<?php echo $post['titulo']; ?>">
                <input type="text" name="extracto" value="<?php echo $post['extracto']; ?>">
                <textarea name="texto"><?php echo $post['texto']; ?></textarea>
                <input type="file" name="thumb">
                <input type="submit" value="Modificar articulo">
                <input type="hidden" name="thumb-guardad" value="<?php echo $post['thumb']; ?>">


            </form>

        </article>
    </div>

</div>


<?php require "../views/footer.php"; ?>