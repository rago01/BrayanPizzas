<?php
      /*  $db_host="localhost";
        $db="brayans";
        $db_usuario="root";
        $db_contra="515t3m45";

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db);
        if(mysqli_connect_errno()){
          echo "Fallo al conectar";
          exit();
        }
          mysqli_set_charset($conexion, "utf8");*/
            try{
                $conn = "mysql:host=localhost;dbname=brayans";
                $user = 'root';
                $password = '515t3m45';

                $conexion = new PDO($conn, $user, $password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET utf8");
                //echo "conexion full";
              }catch(Exception $e){
                die('Error: '.$e->GetMessage());
              }finally{
                $base = null;
              }
                //echo $conn, $user, $password;
                /*$consulta ="SELECT * FROM users";
                $sql = $conexion ->query($consulta);
                foreach ($sql as $tabla) {
                  echo var_dump($tabla);
                }*/
?>
