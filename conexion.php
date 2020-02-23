    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
   <title></title>
  </head>
    <?php
        $db_host="localhost";
        $db_nombre="brayans";
        $db_usuario="root";
        $db_contra="515t3m45";

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
        if(mysqli_connect_errno()){
          echo "Fallo al conectar";
          exit();
        }
          mysqli_set_charset($conexion, "utf8");
     ?>
