<?php
require_once  "./view/usuarioView.php";
require_once  "./model/usuarioModel.php";

class usuarioController extends securedController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    
    $this->view = new usuarioView();
    $this->model = new usuarioModel();
    $this->Titulo = "nuevo Usuario";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->getUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }

  Function AddUsuario(){
  $Usuario = $this->model->GetUsuario();
  $this->view->addUser($this->Titulo,$Usuario);
  }

  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $this->model->Agregar_usuario($nombre,$clave);
    header(LOGIN);
  }

}

 ?>
