<?php
        $db_host="localhost";
        $db="brayans";
        $db_usuario="root";
        $db_contra="515t3m45";

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db);
        if(mysqli_connect_errno()){
          echo "Fallo al conectar";
          exit();
        }
          mysqli_set_charset($conexion, "utf8");
          ?>