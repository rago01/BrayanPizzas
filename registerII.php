<div class="page login-page">
  <div class="container">
    <div class="form-outer text-center d-flex align-items-center">
      <div class="form-inner">
        <div class="logo text-uppercase"><span>Registro</span><strong class="text-primary">Usuarios</strong></div>
        <p class="h4">Bienvenidos a Brayan Pizzas</p>
        <form method="get" class="text-left form-validate">
          <div class="form-group-material">
            <input id="login-username" type="text" name="loginUsername" required data-msg="Please enter your username" class="input-material">
            <label for="login-username" class="label-material">Nombres</label>
          </div>
          <div class="form-group-material">
            <input id="login-password" type="text" name="loginPassword" required data-msg="Please enter your password" class="input-material">
            <label for="login-password" class="label-material">Apellidos</label>
          </div>
          <div class="form-group-material"><label  class="label-material">Tipo de Documento</label>
            <select class="form-control " name="t_doc" placeholder="oo">
              <option value=""></option>
              <option value="">CC</option>
            </select>
          </div>
          <div class="form-group-material">
            <input id="login-password" type="number" name="loginPassword" required data-msg="Please enter your password" class="input-material">
            <label for="login-password" class="label-material">Número de Documento</label>
          </div>
          <div class="form-group-material">
            <input id="login-password" type="number" name="loginPassword" required data-msg="Please enter your password" class="input-material">
            <label for="login-password" class="label-material">Número de Celular</label>
          </div>
          <div class="form-group-material">
            <input id="login-password" type="number" name="loginPassword" required data-msg="Please enter your password" class="input-material">
            <label for="login-password" class="label-material">Direccion</label>
          </div>
          <div class="form-group-material"><label  class="label-material">Tipo de Usuario</label>
          <select class="form-control " name="t_doc">
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
            <input id="login-password" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
            <label for="login-password" class="label-material">Contraseña</label>
          </div>

          <div class="form-group text-center"><a id="login" href="index.html" class="btn btn-primary">Login</a>
            <!-- This should be submit button but I replaced it with <a> for demo purposes-->
          </div>
        </form>
      </div>
