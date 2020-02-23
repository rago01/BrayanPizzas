<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <?php include('conexion.php')?>
    <link rel="stylesheet" href="estilos/index.css">
    <title>Brayans Pizzas</title>
</head>
<body class="container">
    <section class=" text-center">
        <article class="row justify-content-md-center align-items-center">
            <div class="col-lg-6">
              <form class="" action="loginCliente.php" method="post">
                <label class="h2">Número de celular:</label>
                <input type="number" class="form-control" name="celular">
                <p class="h2"><input type="submit" class="btn btn-primary" value="Ingresar">  ó <a href="register.php">Registrarse</a> </p>
              </form>
            </div>
        </article>
    </section>
</body>
</html>
