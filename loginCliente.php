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
          alert ("Bienvenido");

          location.href = "indexCliente.php"

        </script>';
}
?>
