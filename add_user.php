
<?php
include('conexion.php');

if ($_POST['valida']=='user') {
  if ($_POST['aceptar']!="Descartar") {
    $claveE="";$claveA1="";$claveA2="";
        if ($_POST["clave1"]==$_POST["clave2"]){
          if ($_POST["clave1"]!=""){
            $claveE=",clave='".$_POST["clave1"]."'";
            $claveA1=",clave";
            $claveA2=",'".$_POST["clave1"]."'";
          }
        }

   $sql="INSERT INTO users (id_perfil, nombres, apellidos, t_doc, doc, email, celular, direccion, clave, estado_user)
      VALUES ('".$_POST['tipo_user']."','".$_POST['nombres']."','".$_POST['apellidos']."',
        '".$_POST['tipo_doc']."','".$_POST['num_doc']."','".$_POST['email']."',
        '".$_POST['celular']."','".$_POST['direccion']."'$claveA2,'1')";
        mysqli_query($conexion,$sql);
      echo $sql;
  }
}else {
  $cel = $_POST['celular'];
  $numeroCel="SELECT celular from clientes where celular = '$cel'";
  $consulta=mysqli_query($conexion, $numeroCel);
  $conexion->query($numeroCel);
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
    mysqli_query($conexion,$sql);
    echo 'Felicidades, registro con exito.';
  }
}

?>
