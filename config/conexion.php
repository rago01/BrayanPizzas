<?php
class database{
      public $host;
      public $db;
      public $user;
      public $password;
      public $charset;

      public function __construct(){
          $this->host     = 'localhost';
          $this->db       = 'brayans';
          $this->user     = 'root';
          $this->password = "515t3m45";
          $this->charset  = 'utf8mb4';
      }

    public function connect(){
        try{
          $conn = "mysql:host=" . $this->host . ";dbname=" . $this->db ;
          $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
          $conexion = new PDO($conn, $this->user, $this->password, $options);
          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $conexion->exec("SET CHARACTER SET utf8");
          //echo "conexion full";
          return $conexion;
        }catch(Exception $e){
          die('Error: '.$e->GetMessage());
        }finally{
          $base = null;
        }
      }

    }

    $db = new database();
    $db->connect();
    //$db->connect();
   /* $sql="SELECT id_perfil, nombre_perfil FROM perfiles";
    $consulta=$db->connect()->prepare($sql);
    $consulta->execute();
    echo $consulta;
    foreach ($consulta as $perfil){
      echo $perfil['id_perfil'].''.$perfil['nombre_perfil'].'';
    }*/
  
?>
