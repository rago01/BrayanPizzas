<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<?php include('conexion.php')?> 
    <title>Document</title>
</head>
<body>
<section class="container text-center">
        <article class="row justify-content-md-center align-items-center">
            <div class="col-lg-12 col-12">
                <p class="h1">Registro de Usuario</p> 
                <form action="add_user.php" method="POST" >
                    <section class="row">
                        <article class="col-12 col-sm-4">
                            <p class="text-left h5">Nombres</p>
                            <input type="text" class="form-control" name="nombres">
                        </article>
                        <article class="col-sm-4 col-12">
                        <p class="text-left h5">Apellidos</p>
                            <input type="text" class="form-control" name="apellidos">
                        </article>
                        <article class="col-sm-4 col-12">
                        <p class="text-left h5">Celular</p>
                            <input type="number" class="form-control" name="celular">
                        </article>
                        <article class="col-sm-4 col-12">
                        <p class="text-left h5">Email</p>
                            <input type="text" class="form-control" name="email">
                        </article>
                        <article class="col-sm-4 col-12">
                        <p class="text-left h5">Dirección</p>
                            <input type="text" class="form-control" name="direccion">
                        </article>
                        <article class="col-sm-4 col-12">    
                        <p></p> 
                          <input type="submit" class="btn   btn-success">
                        </article>
                    </section>
                    
                </form>
            </div>
        </article>
    </section>
    
</body>
</html>

