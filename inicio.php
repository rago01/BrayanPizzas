<?php

session_start();
$cliente = $_SESSION['id_cliente']; $nombres = $_SESSION['nombres'];$apellidos = $_SESSION['apellidos']; $celular = $_SESSION['celular'];
//echo var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="font-awesome/css/all.css">
<link rel="stylesheet" href="font-awesome/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<body class="container-fluid" >
    <header class="row justify-content-between">
        <img  class="logo" src="img/logo.png" style="height: 100px;">
        
        <div class="row align-items-center ">
          <div class="">
            <img src="img/user.png" >
          </div>
          <div class="dropdown ">
              <a href="#" class="btn text-dark  dropdown-toggle" id="menuUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong><?php echo $nombres.' '.$apellidos ?></strong>  
              </a>
            <div class="dropdown-menu" aria-labelledby="menuUser">
                  <a class="dropdown-item text-decoration-none" href="/">Cuenta</a>
                  <a class="dropdown-item text-decoration-none" href="/">Mis pedidos</a>
                  <a class="dropdown-item text-decoration-none" href="cerrar.php">Cerrar sesion</a> 
            </div>
          </div>
        </div>
    </header>


<div class="row">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#dashboard" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
      <a class="nav-link dropdown-submenu" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Productos</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contabilidad</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Promociones</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Estadisticas</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Configuraciones</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ventas</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Inventario</a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <?php include("categorias_productos.php");?>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</div>
</body>
</html>