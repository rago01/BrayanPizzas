<?php
 
 $sql="SELECT m.id_menu,titulo,modulo,grupo_menu 
from perfiles_menu a LEFT JOIN menu m ON a.id_menu=m.id_menu 
where a.id_perfil='".$_SESSION['AUT']['id_perfil']."' AND m.grupo_menu='Configuracion'";
$consulta=$db->connect()->prepare($sql);
$consulta->execute();

foreach ($consulta as $menu) {
    echo '<a href="inicio.php?opcion='.$menu['id_menu'].'">
    <span class="fa fa-user"></span> '.$menu['titulo'].'</a>';
}

?>
