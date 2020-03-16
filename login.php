<?php

require 'conexion.php';

if ($_POST['valida']=='user') {
  if ($_POST['aceptar']!="Descartar") {
    //echo $_POST["clave1"].'<br>'.$_POST["clave2"];
    //La clave ya viene encriptada en SHA3
  echo  $doc = $_POST["user"];
  echo   $pass = $_POST["clave1"];
class createUser extends database{
  private $nombres;
  private $id_user;
  private $id_perfil;

  public function existenciaUsuario($doc, $pass){
    $doc = $_POST["user"];
    $pass = $_POST["clave1"];
  echo  $sql="SELECT id_user,id_perfil,nombres,apellidos,celular,t_doc,doc,email
            FROM users WHERE doc= :doc'
            AND clave= :pass ";
      $consulta=$db->connect()->prepare($sql);
      $consulta->execute([['doc' => $doc, 'pass' => $pass]]);
      echo $sql;
      if ($consulta->rowCount()) {
        return true;
      }else {
        return false;
      }
  }


    public function setUser($doc){
      $sql="SELECT id_user,id_perfil,nombres,apellidos,celular,t_doc,doc,email
            FROM users where doc=$doc";
      $consulta=$db->connect()->prepare($sql);
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
}
existenciaUsuario($doc, $pass);

    //echo $sql;
  }
}





  ?>
