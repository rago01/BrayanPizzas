
<?php
include('config/conexion.php');

if ($_POST['valida']=='user') {
  if ($_POST['aceptar']!="Descartar") {
    //echo $_POST["clave1"].'<br>'.$_POST["clave2"];
    //La clave ya viene encriptada en SHA3
    //$contrasenia = password_hash($_POST["clave1"], PASSWORD_DEFAULT);
    $claveE="";$claveA1="";$claveA2="";
        if ($_POST["clave1"]==$_POST["clave2"]){
          if ($_POST["clave1"]!=""){
            $claveE=",clave='".$_POST["clave1"]."'";
            $claveA1=",clave";
            $claveA2=",'".$_POST["clave1"]."'";
          }
        }

 echo $sql="INSERT INTO users (id_perfil, nombres, apellidos, t_doc, doc, email, celular, direccion, clave, estado_user)
         VALUES ('".$_POST['tipo_user']."','".$_POST['nombres']."','".$_POST['apellidos']."',
        '".$_POST['tipo_doc']."','".$_POST['num_doc']."','".$_POST['email']."',
        '".$_POST['celular']."','".$_POST['direccion']."'$claveA2,'1')";
        $consulta=$db->connect()->prepare($sql);
        $consulta->execute();

  }
}else {
  $cel = $_POST['celular'];
  $sql="SELECT celular from clientes where celular = '$cel'";
  $consulta=$bd->connect()->prepare($sql);
  $consulta->execute();
  $total = mysqli_num_rows($consulta);
  // echo $total;
  if ($total > 0) {
          echo'<script language = javascript>
            alert ("Este número celular ya se encuentra registrado");

            location.href = "register.php"

          </script>';
  }else{
    $sql="INSERT INTO clientes values
    (null,4,'".$_POST['nombres']."','".$_POST['apellidos']."','".$cel."',
      '".$_POST['email']."','".$_POST['direccion']."')";
      $consulta=$conexion->prepare($sql);
      $consulta->execute();
    echo 'Felicidades, registro con exito.';
  }
}

?>
