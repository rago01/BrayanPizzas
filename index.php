
    <?php

    require 'conexion.php';

    if (isset($_POST['celular'])){
        session_start();
        $celular = $_POST['celular'];
        $numeroCel="SELECT id_cliente,nombres,apellidos,celular,id_perfil from clientes where celular = '$celular'";
        $consulta=mysqli_query($conexion, $numeroCel);
        $resultado = mysqli_fetch_array($consulta);
        $cliente = $resultado['id_cliente'];
        $celular = $resultado['celular'];
        $nombres = $resultado['nombres'];
        $apellidos =$resultado['apellidos'];
        $perfil = $resultado['id_perfil'];
        $total = mysqli_num_rows($consulta);
          if ($total > 0) {
          $_SESSION['nombres'] = $nombres;
          $_SESSION['apellidos'] = $apellidos;
          $_SESSION['celular'] = $celular;
          $_SESSION['id_cliente'] = $cliente;
          $_SESSION['id_perfil'] = $perfil;
           echo'<script language = javascript>
            location.href = "inicio.php"
               </script>';
      }
  }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/fontawesome.css">
<link rel="stylesheet" href="font-awesome/css/fontawesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
        <form action="index.php" method="post">
          <label class="h2">Número de celular:</label>
            <input type="number" class="form-control" name="celular">
          <p class="h2"><input type="submit" class="btn btn-danger" value="Ingresar">  ó <a href="register.php">Registrarse</a> </p> <hr>
          <p class="h4 "> <a class="warning" href="loginAdmin.php">Ingresar como Administrador ó Cajero</a>  </p>
        </form>
      </div>
    </section>
</body>
</html>
