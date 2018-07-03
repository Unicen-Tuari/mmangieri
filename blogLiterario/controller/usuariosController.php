<?php
require_once "./model/usuarioModel.php";
require_once "controller/SecureController.php";
require_once "./view/usuarioView.php";

class usuarioController extends SecureController{
  private $usuariosModel;
  private $usuarioView;

  function __construct(){
      $this->usuariosModel= new usuariosModel();
      $this->usuarioView= new usuarioView();
  }

  function listarUsuarios($params=[]){
    session_start();
    if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
      $usuarios= $this->usuarioModel->listarUsuarios();
      $this->usuarioView->listarUsuarios($usuarios);
    }
  }

  function ingresarUsuario($params = []){
    $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $usuario= ['email'=> $_POST['email'],
               'pass'=> $hash,
               'nombre'=> $_POST['nombre'],
               'apellido'=> $_POST['apellido']
             ];
    $this->usuariosModel->ingresarUsuario($usuario);
    PageHelpers::homePage();
  }

    function sacarPermisos($params = []){
    session_start();
    if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
        $usuario= $this->usuariosModel->obtenerUsuario($params[0]);
        if ($usuario['administrador']){
            $this->usuariosModel->editarPermisos($usuario['id_usuario'],0);
        }
        else{
            $this->usuariosModel->editarPermisos($usuario['id_usuario'],1);
        }
        PageHelpers::usuariosPage();
    }
  }

  function borrarUsuario($params = []){
    session_start();
    if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
        $this->blogLiterarioModel->borrarUsuario($params[0]);
        PageHelpers::usuariosPage();
      }
  }

}
 ?>