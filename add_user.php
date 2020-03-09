<?php
include('conexion.php');

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
?>
