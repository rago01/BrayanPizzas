<?php
require 'config/user.php';
$user = new usuario();

if (isset($_POST['user']) && isset($_POST['clave1'])) {
  echo $sql="SELECT id_user,id_perfil,nombres,apellidos,celular,t_doc,doc,email,clave
            FROM users WHERE doc= '".$_POST['user']."'
            AND clave='".$_POST['clave1']."'";
            $consulta=$db->connect()->prepare($sql);
            $consulta->execute();
              foreach($consulta as $fila){
                session_start();
                $_SESSION['AUT']= $fila;
                header("location:".'inicio.php');
              }
           
}elseif (condition) {
  # code...
}

/*
if (isset($_SESSION['AUT']['id_user'])){
  $user->setUser($userSession->getCurrentUser());
  echo "EXiste";
  include_once 'inicio.php';
}else if(isset($_POST['user']) && isset($_POST['clave1'])) {

$usuario = $_POST['user'];
$password = $_POST['clave1'];

  $user = new usuario();
  if($user->userExists($usuario, $password)){
    //echo "Existe";
    $userSession->setCurrentUser($usuario);
    $user->setUser($usuario);
    include_once 'inicio.php';
  }else {
    $errorLogin = "Número de usuario y/o password incorrecto";
    include_once 'loginAdmin.php';
  }
}else {
  include_once 'loginAdmin.php';
}
*/

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <script src = "js/sha3.js"></script>
      <script>
        function validar(){
            if (document.forms[0].clave1.value != ""){
              document.forms[0].clave1.value = CryptoJS.SHA3(document.forms[0].clave1.value);
            }else{
            alert("La clave no puede estar vacía");
            document.forms[0].clave1.value = "";
            document.forms[0].clave1.focus();				// Ubicar el cursor
            return(false);
          }
        }
      </script>
  <body>
  <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Brayan</span><strong class="text-primary">Pizzas</strong></div>
            <p>Bienvenido/a</p>
            <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
            <form method="POST" enctype="multipart/form-data" onsubmit="return validar()" class="text-left form-validate" action="principal.php">
              <div class="form-group-material">
                <input id="login-username" type="text" name="user" required data-msg="Please enter your username" class="input-material">
                <label for="login-username" class="label-material">User (N. Identificación)</label>
              </div>
              <div class="form-group-material">
                <input id="login-password" type="password" name="clave1" required data-msg="Please enter your password" class="input-material">
                <label for="login-password" class="label-material">Password</label>
              </div>
              <div class="form-group text-center">
                <input type="submit" class="btn btn-primary" name="aceptar" value="Ingresar">
                <input type="hidden" name="valida" value="user">
              </div>
            </form>
          </div>
        </div>
      </div>
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
    <!-- Main File-->
    <script src="js/front.js"></script>

  </body>
</html>
