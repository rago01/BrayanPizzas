<?php

$opcion = $_REQUEST['opcion'];

if (isset($_REQUEST['opcion'])) {
 $sql="SELECT modulo FROM perfiles_menu a LEFT JOIN menu m ON m.id_menu=a.id_menu
  WHERE a.id_perfil='".$_SESSION['AUT']['id_perfil']."' AND a.id_menu=$opcion";
  $consulta=$db->connect()->prepare($sql);
  $consulta->execute();
   //var_dump($consulta);

  foreach ($consulta as $menu) {
    //echo var_Dump($menu);
    include($menu['modulo'].'.php');
  }
}else{
  echo "ok";
}

?>
