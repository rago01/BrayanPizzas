<?php include('conexion.php')?>

<section class="container">
     <section class="panel-body">
       <section class="row">
    <?php

    $consultaProductos="SELECT nombre_categoria FROM categorias_productos";
    $consulta=mysqli_query($conexion, $consultaProductos);
    while ($productos = mysqli_fetch_array($consulta)) {
    ?>
        <article class="col-12 col-sm-4">
          <div>
          <img class="card-img-top " src="img/img8.jpeg"  alt="Card image cap"></div>
          <p class="h3 alert alert-warning"><strong><?php echo $productos['nombre_categoria']?></strong></p>
        </article>
      <?php } ?>

    </section>
  </section>
  </section>
</section>
´
