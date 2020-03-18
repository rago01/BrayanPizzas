<?php
require 'config/user.php';
require 'config/userSession.php';

$userSession = new UserSession();
$user = new usuario();

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


?>
