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
    $usuarios= $this->usuarioModel->listarUsuarios();
    $this->usuarioView->listarUsuarios($usuarios);
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
        $usuario= $this->usuariosModel->obtenerUsuario($params[0]);
        if ($usuario['administrador']){
            $this->usuariosModel->editarPermisos($usuario['id_usuario'],0);
        }
        else{
            $this->usuariosModel->editarPermisos($usuario['id_usuario'],1);
        }
    }



}
 ?>