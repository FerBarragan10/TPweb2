<?php

class usuarioModel{
  private $db;

  function __construct()
  {
   $this->db=$this->Connect();
  }

  private function Connect(){
    return new PDO('mysql:host=localhost;'
   .'dbname=superliga;charset=utf8'
   , 'root', '');
  }
  function GetUsuario(){

        $sentencia = $this->db->prepare( "select * from usuario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }


  function Agregar_usuario($nombre,$clave){
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre,clave) VALUES(?,?)");
    $sentencia->execute(array($nombre,$clave));
  }
  function GET_user($user){
    $sentencia =$this->db->prepare( "select * from usuario where nombre =? limit 1");
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
 ?>
