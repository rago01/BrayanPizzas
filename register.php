<?php include('conexion.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/index.css">
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
                            <input type="text" class="form-control" required name="nombres">
                        </article>
                        <article class="col-sm-4 col-12">
                        <p class="text-left h5">Apellidos</p>
                            <input type="text" class="form-control" required name="apellidos">
                        </article>
                        <article class="col-sm-4 col-12">
                        <p class="text-left h5">Celular</p>
                            <input type="number" class="form-control" required name="celular">
                        </article>
                        <article class="col-sm-4 col-12">
                        <p class="text-left h5">Email</p>
                            <input type="text" class="form-control" required name="email">
                        </article>
                        <article class="col-sm-4 col-12">
                        <p class="text-left h5">Dirección</p>
                            <input type="text" class="form-control" required name="direccion">
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
