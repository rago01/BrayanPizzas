<?php 
//require 'config/conexion.php';
//$this->connect();

//include 'config/conexion.php';
 $perfil=$user->getPerfil();
 $sql="SELECT m.id_menu,titulo,modulo,grupo_menu 
from perfiles_menu a LEFT JOIN menu m ON a.id_menu=m.id_menu 
where a.id_perfil=$perfil AND m.grupo_menu='Configuracion'";
$consulta=$db->connect()->prepare($sql);
$consulta->execute();

foreach ($consulta as $menu) {
    echo '<a href="principal.php?opcion='.$menu['id_menu'].'">
    <span class="fa fa-user"></span> '.$menu['titulo'].'</a>';
}
    //$db->connect();
   /* $sql="SELECT id_perfil, nombre_perfil FROM perfiles";
    $consulta=$db->connect()->prepare($sql);
    $consulta->execute();
    echo $consulta;
    foreach ($consulta as $perfil){
      echo $perfil['id_perfil'].''.$perfil['nombre_perfil'].'';
    }

/*$consulta=$us->connect()->prepare($sql);
$consulta->execute(); */



?>