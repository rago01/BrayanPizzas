<head>
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontastic.css">
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<script src = "js/sha3.js"></script>
		<script>
			function validar(){
				if (document.forms[0].nombres.value == ""){
					alert("NO PODEMOS CREAR EL USUARIO SIN UN NOMBRE");
					document.forms[0].nombres.focus();				// Ubicar el cursor
					return(false);
				}
				if (document.forms[0].clave1.value == document.forms[0].clave2.value ){
					if (document.forms[0].clave1.value != ""){
						document.forms[0].clave1.value = CryptoJS.SHA3(document.forms[0].clave1.value);
						document.forms[0].clave2.value = document.forms[0].clave1.value;
					}
				}else{
					alert("Error en confirmacion de la clave!");
					document.forms[0].clave1.value = "";
					document.forms[0].clave2.value = "";
					document.forms[0].clave1.focus();				// Ubicar el cursor
					return(false);
				}
			}
		</script>

<?php
include('conexion.php');

?>
<div class="page login-page">
  <div class="container">
    <div class="form-outer text-center d-flex align-items-center">
      <div class="form-inner">
        <div class="logo text-uppercase"><span>Registro</span><strong class="text-primary">Usuarios</strong></div>
        <p class="h4">Bienvenidos a Brayan Pizzas</p>
        <form method="POST" action="add_user.php" enctype="multipart/form-data" onsubmit="return validar()" class="text-left form-validate">
          <div class="form-group-material">
            <label for="login-username" class="label-material">Nombres</label>
            <input id="login-username" type="text" name="nombres" required data-msg="Please enter your username" class="input-material">
          </div>
          <div class="form-group-material">
            <label for="login-password" class="label-material">Apellidos</label>
            <input id="login-password" type="text" name="apellidos" required data-msg="Please enter your password" class="input-material">
          </div>
          <div class="form-group-material"><label  class="label-material">Tipo de Documento</label>
            <select class="form-control " name="tipo_doc">
              <option value=""></option>
              <option value="CC">Cedula de Ciudadania</option>
            </select>
          </div>
          <div class="form-group-material">
            <label for="login-password" class="label-material">Número de Documento</label>
            <input id="login-password" type="number" name="num_doc" required data-msg="Please enter your password" class="input-material">
          </div>
          <div class="form-group-material">
            <label for="login-password" class="label-material">Correo electronico</label>
            <input id="login-password" type="email" name="email" required data-msg="Please enter your password" class="input-material">
          </div>
          <div class="form-group-material">
          <label for="login-password" class="label-material">Número de Celular</label>
            <input id="login-password" type="number" name="celular" required data-msg="Please enter your password" class="input-material">
          </div>
          <div class="form-group-material">
          <label for="login-password" class="label-material">Direccion</label>
            <input id="login-password" type="text" name="direccion" required data-msg="Please enter your password" class="input-material">
          </div>
          <div class="form-group-material"><label  class="label-material">Tipo de Usuario</label>
          <select class="form-control " name="tipo_user">
            <option></option>
            <?php
            echo $consulta="SELECT id_perfil, nombre_perfil FROM perfiles";
            $resultado=mysqli_query($conexion, $consulta);
            while ($perfil = mysqli_fetch_array($resultado)) {
              echo'
              <option value="'.$perfil['id_perfil'].'">'.$perfil['nombre_perfil'].'</option>';
            }?>
            </select>
          </div>
          <div class="form-group-material">
          <label for="login-password" class="label-material">Contraseña</label>
            <input id="login-password" type="password" name="clave1" required data-msg="Please enter your password" class="input-material">
          </div>
          <div class="form-group-material">
          <label for="login-password" class="label-material">Confirmar Contraseña</label>
            <input id="login-password" type="password" name="clave2" required data-msg="Please enter your password" class="input-material">
          </div>

          <div class="form-group text-center">
            <input type="submit" class="btn btn-primary" name="aceptar" value="Agregar">
            <input type="hidden" name="valida" value="user">
          </div>
        </form>
      </div>
