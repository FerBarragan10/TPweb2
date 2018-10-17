<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) .'/home');
define('HOMEADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/homeadmin');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');

class configApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'jugadorController#home',
      'home'=> 'jugadorController#home' ,
      'homeadmin'=> 'jugadorController#homeAdmin' ,
      'borrar'=> 'jugadorController#Borra_jugador',
      'agregar'=> 'jugadorController#Agrega_jugador',
      'editar'=> 'jugadorController#EditarJugador',
      'addJugador'=> 'jugadorController#AddJugador',
      'guardarEditar'=> 'jugadorController#GuardarEditarJugador',

      'MostrarUsuarios'=> 'usuarioController#MostrarUsuario',
      'login'=>'loginController#login',
      'logout'=>'loginController#logout',
      'verificarLogin'=> 'loginController#verificarLogin',


      'borrarEquipo'=> 'jugadorController#removeEquipo',
      'guardarEquipo'=> 'jugadorController#guardarEquipo',
      'editarEquipo'=> 'jugadorController#editEquipo',
      'addEquipo'=> 'jugadorController#addEquipo',


      'addUsuario'=>'usuarioController#addUsuario',
      'InsertarUsuario'=>'usuarioController#InsertUsuario'


    ];

}
 ?>
