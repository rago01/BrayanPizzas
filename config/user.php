<?php
include 'conexion.php';

class usuario extends database{
    private $nombres;
    private $apellidos;
    private $id_perfil;
    private $id_user;
    public function userExists($doc, $pass){
    $sql="SELECT id_user,id_perfil,nombres,apellidos,celular,t_doc,doc,email,clave
            FROM users WHERE doc= '$doc'
            AND clave='$pass'";

      $consulta=$this->connect()->prepare($sql);
      $consulta->execute();

            if($consulta->rowCount()){
              
                return true;
            }else{
                return false;
            }
        }

        public function setUser($doc){
            $sql="SELECT id_user,id_perfil,nombres,apellidos,celular,t_doc,doc,email
                  FROM users where doc = '$doc'";
            $consulta=$this->connect()->prepare($sql);
            $consulta->execute();
            foreach ($consulta as $currentUser) {
              $this->nombres = $currentUser['nombres'];
              $this->apellidos = $currentUser['apellidos'];
              $this->id_user = $currentUser['id_user'];
              $this->id_perfil = $currentUser['id_perfil'];
            }
          }

          public function getNombre(){
            return $this->nombres;
        }
          public function getPerfil(){
              return $this->id_perfil;
          }
          public function getApellidos(){
              return $this->apellidos;
          }
    }


    //$ss->$this->connect();

?>
