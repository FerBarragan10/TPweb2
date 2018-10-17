<?php
require_once "./view/jugadorView.php";
require_once "./model/jugadorModel.php";
require_once "securedController.php";

class jugadorController
{
  private $View;
  private $titulo1;
  private $titulo2;
  private $Model;

    function __construct()
    {
    $this->View=new jugadorView();
    $this->Model=new jugadorModel();
    $this->titulo1="Equipos de la Superliga  Argentina";
    $this->titulo2="Jugadores de la Superliga  Argentina";
    $this->tituloedit="editar jugador";

    }
    function addjugador(){
        $equipos = $this->Model->getEquipos();
        $this->View->addJugador($this->titulo2,$equipos);
    }

    Function adddjugador(){
        $equipos = $this->Model->getEquipos();
    $this->View->addJugador($this->titulo2,$equipos);
    }
  function homeAdmin(){
    $jugadores =$this->Model->GET_jugadores();
    $equipos = $this->Model->getEquipos();
    $this->View->mostrarAdmin($this->titulo1,$this->titulo2,$jugadores,$equipos);

  }
  function home(){
    $jugadores =$this->Model->GET_jugadores();
    $equipos = $this->Model->getEquipos();
    $this->View->mostrarC($this->titulo1,$this->titulo2,$jugadores,$equipos);

  }
  function Agrega_jugador(){
   $id_equipo=$_POST["id_equipo"];
   $dorsal=$_POST["dorsal"];
   $nombre_jugador=$_POST["nombre_jugador"];
   $fecha_nac=$_POST["fecha_nac"];
   $altura=$_POST["altura"];
   $this->Model->Agregar_jugador($id_equipo,$dorsal,$nombre_jugador,$fecha_nac,$altura);
   header(HOMEADMIN);
  }
 function Borra_jugador($param){
     $this->Model->Borrar_Jugador($param[0]);
     header(HOMEADMIN);
 }
 function GuardarEditarJugador(){
   $nombre_jugador = $_POST["nombrejugador"];
   $fecha_nac = $_POST["fechanac"];
   $dorsal=$_POST["dorsal"];
   $id_jugador=$_POST["idjugador"];
   echo "<h1>" . $id_jugador . "</h1>";
     echo "<h1>" . $nombre_jugador . "</h1>";
       echo "<h1>" . $dorsal . "</h1>";
         echo "<h1>" . $fecha_nac . "</h1>";
   $this->Model->GuardarEditarJugador($nombre_jugador,$fecha_nac,$dorsal,$id_jugador);
   header(HOMEADMIN);


 }
 function EditarJugador($param){
   echo "<h1>" .$param[0]. "</h1>";
     $id_jugador = $param[0];
     $jugador = $this->Model->getJugador($id_jugador);
     $this->View->MuestraEditJugador($this->tituloedit,$jugador);
 }
 function editEquipo($param){
     $id_equipo = $param[0];
     $equipo = $this->Model->getEquipo($id_equipo);
     $this->View->muestraFormEquipo($this->tituloedit,$equipo);
 }
 function guardarEquipo(){
   $id_equipo = $_POST['id_equipo'];
   $nombreequipo = $_POST['nombre_equipo'];
   $postabla = $_POST['pos_tabla'];
   $clasificacioncopa = $_POST['clasificacion_copa'];
   if ($id_equipo=="") {
     $this->Model->addEquipo($id_equipo,$nombreequipo,$postabla,$clasificacioncopa);
     header(HOMEADMIN);
   }
   else {
     $this->Model->guardarEquipo($id_equipo,$nombreequipo,$postabla,$clasificacioncopa);
     header(HOMEADMIN);
   }
 }


 function  removeEquipo($param){
     $this->Model->removeEquipo($param[0]);//id_equipo
     header(HOME);
 }
 function addEquipo(){
     $equipo=0;
     $this->View->muestraFormEquipo($this->tituloedit,$equipo);
 }
 function adddEquipo($param){

  $nombreequipo = $_POST['nombre_equipo'];
  $postabla = $_POST['pos_tabla'];
  $clasificacioncopa = $_POST['clasificacion_copa'];
  if(isset($nombreequipo) && !empty($postabla) && !empty($clasificacioncopa)){
      $this->Model->addEquipo($nombreequipo,$postabla,$clasificacioncopa);
    }
  }


function getEquipo(){
 $nombreequipo = $_POST['nombre_equipo'];
 if(isset($_POST['nombre_equipo'])) {
     $equipo=$this->Model->getEquipo($nombreequipo);
     $jugadores=$this->Model->getJugadores($equipo['id_equipo']);
     $this->View->mostrar($equipo,$jugadores);
   }
 }





}
?>
