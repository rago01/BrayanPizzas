<?php

require 'conexion.php';

if ($_POST['valida']=='user') {
  if ($_POST['aceptar']!="Descartar") {
    //echo $_POST["clave1"].'<br>'.$_POST["clave2"];
    //La clave ya viene encriptada en SHA3
    $user = $_POST["user"];
    $sql="SELECT id_user,id_perfil,nombres,apellidos,celular,t_doc,doc,email
          FROM users WHERE doc='".$user."'
          AND clave='".$_POST["clave1"]."'";
    $consulta=$conexion->prepare($sql);
    $consulta->execute();
    if ($consulta->rowCount()) {
      return true;
    }else {
      return false;
    }

    public function setUser($user){
      $sql="SELECT id_user,id_perfil,nombres,apellidos,celular,t_doc,doc,email
            FROM users where doc=$user";
      $consulta=$conexion->prepare($sql);
      $consulta->execute();
      foreach ($consulta as $currentUser) {
        $this->nombres = $currentUser['nombres'];
        $this->id_user = $currentUser['id_user'];
        $this->id_perfil = $currentUser['id_perfil'];
      }
    }

    public function getNombres(){
      return $this->nombres;
    } 
    //echo $sql;
  }
}





  ?>
