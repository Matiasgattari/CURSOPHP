<?php


$numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>


<section class="paginacion">



    <ul>

        <?Php if (pagina_actual() === 1): ?>
            <li class="disabled">&laquo;</li>
        <?Php else: ?>
            <li><a href="index.php?p=<?php echo pagina_actual() - 1 ?>">&laquo;</a></li>
        <?Php endif; ?>


        <?php for ($i = 1; $i <= $numero_paginas; $i++): ?>

            <?Php if (pagina_actual() === $i): ?>
                <li class="active"><?php echo $i ?></li>
            <?Php else: ?>
                <li><a href="index.php?p=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?Php endif; ?>


        <?php endfor; ?>



        <?Php if (pagina_actual() == $numero_paginas): ?>
            <li class="disabled">&raquo;</li>
        <?Php else: ?>
            <li><a href="index.php?p=<?php echo pagina_actual() + 1 ?>">&raquo;</a></li>
        <?Php endif; ?>



        <!--         
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li class="disabled">&raquo;</li> -->

    </ul>




</section>