<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('conexion.php')?>
    <link rel="stylesheet" href="estilos/index.css">
    <title>Brayans Pizzas</title>
</head>
<body>
    <section class="limiter">
      <header class="container">
        <div class="col-12 text-center">
          <img  src="img/logo.png" class="logo" alt="">
        </div>
      </header>
      <div class="container-login col-12 text-center">
        <form action="loginCliente.php" method="post">
          <label class="h2">Número de celular:</label>
          <input type="number" class="form-control" name="celular">
          <p class="h2"><input type="submit" class="btn btn-danger" value="Ingresar">  ó <a href="register.php">Registrarse</a> </p> <hr>
          <p class="h4 "> <a class="warning" href="loginAdmin.php">Ingresar como Administrador ó Cajero</a>  </p>
        </form>
      </div>
    </section>
</body>
</html>
