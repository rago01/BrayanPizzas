<?php

require 'conexion.php';

if ($_POST['valida']=='user') {
  if ($_POST['aceptar']!="Descartar") {
    //echo $_POST["clave1"].'<br>'.$_POST["clave2"];
    //La clave ya viene encriptada en SHA3

    $sql="SELECT id_user,id_perfil,nombres,apellidos,celular,t_doc,doc,email
          FROM users WHERE doc='".$_POST["user"]."'
          AND clave='".$_POST["clave1"]."'";
    echo $sql;
  }
}

  ?>
