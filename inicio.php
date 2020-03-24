<?php 

session_start();
date_default_timezone_set('America/Bogota');
include('config/user.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontastic.css">
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
  <link rel="stylesheet" href="css/style.sea.css" id="theme-stylesheet">
  <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<body>
    <!-- Side Navbar -->
  <div class="page">
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
            <h2 class="h5"><?php  echo $_SESSION['AUT']['nombres']; ?></h2><span>
            <?php 
            if ($_SESSION['AUT']['id_perfil'] == 4) {
              echo 'Cliente';
            }if ($_SESSION['AUT']['id_perfil'] ==1) {
              echo 'Administrador';
            }
            
            ?></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="inicio.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">P</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="inicio.php"> <i class="icon-home"></i>Dashboard</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Productos <div class="badge badge-warning">6 New</div></a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Categorías</a></li>
                <li><a href="#">Producto</a></li>
                <li><a href="#Inventario" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Inventario</a>
                  <ul id="Inventario" class="collapse list-unstyled ">
                    <li><a href="#">Movimientos</a></li>
                    <li><a href="#">Proveedores</a></li>
                    <li><a href="#">Ingredientes</a></li>
                    <li><a href="#">Unidades</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="charts.html"> <i class="icon-grid"></i>Contabilidad</a></li>
            <li><a href="tables.html"> <i class="fa fa-bar-chart"></i>Estadisticas</a></li>

            <li><a href="#config" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Configuración</a>
              <ul id="config" class="collapse list-unstyled ">
                <li><?php include('menus/menu_admin.php'); ?></li>
              </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    <header class="header">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="inicio.php" class="navbar-brand">
                <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Brayan Pizzas</strong></div></a></div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <!-- Notifications dropdown-->
              <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                        <div class="notification-time"><small>10 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                </ul>
              </li>
              <!-- Messages dropdown-->
              <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                      <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                </ul>
              </li>
              <!-- Languages dropdown    -->
              <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                <ul aria-labelledby="languages" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French                                                         </span></a></li>
                </ul>
              </li>
              <!-- Log out-->
              <li class="nav-item"><a href="config/logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <?php 
            include ('content.php');
//echo $_SESSION['AUT']['id_perfil'];
    ?>
</div>



    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body></html>
