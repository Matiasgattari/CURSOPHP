<!-- calculos, conoexion a la bdd, estructura html (vista) -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Paginación</title>
</head>
<body>
    
<div class="contenedor">
<h1>Artículos</h1>
<section class="articulos">
<ul>

<!-- trae los articulos y los muestra con php -->
<?php foreach($articulos as $articulo): ?>
<li> <?php echo $articulo['ID'] . '.- ' . $articulo['Articulo']  ?>  </li>
<?php endforeach; ?>

</ul>
</section>




<section class="paginacion">
<ul>
   

<!-- boton para ir a pagina anterior y su deshabilitacion -->

<?php if ($pagina == 1): ?> 
    <li class="disabled">&laquo;</li>
<?php else: ?> 
    <li><a href="?pagina=<?php echo $pagina -1 ?>">&laquo;</a></li>
<?php endif; ?> 



<!-- traer el numero de paginas para poder seleccionar  -->
<?php 

for ($i=1; $i <= $numeroPaginas; $i++) { 

if($pagina==$i){
    echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
} else {
    echo "<li ><a href='?pagina=$i'>$i</a></li>";
}
};
?>


<!-- boton para ir a pagina siguiente y su deshabilitacion -->
<?php if ($pagina == $numeroPaginas): ?> 
    <li class="disabled">&raquo;</li>
<?php else: ?> 
    <li><a href="?pagina=<?php echo $pagina +1 ?>">&raquo;</a></li>
<?php endif; ?> 


</ul>
</section>





</div>



</body>
</html>