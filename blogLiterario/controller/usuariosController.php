<?php
require_once "./model/usuariosModel.php";
require_once "controller/SecureController.php";
require_once "./view/usuarioView.php";

require_once "./view/loginView.php";


class usuariosController extends SecureController{
  private $usuariosModel;
  private $usuarioView;
  private $loginView;


  function __construct(){
      $this->usuariosModel= new usuariosModel();
      $this->usuarioView= new usuarioView();
      $this->loginView= new LoginView();
  }

  function listarUsuarios($params=[]){
    session_start();
    if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == '1') ){
      $usuarios= $this->usuariosModel->listarUsuarios();
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
    $verificarUsuario= $this->usuariosModel->obtenerUsuario($usuario['email']);
    if ($verificarUsuario['email'] == $usuario['email']){
        $estado= "visible";
        $this->loginView->registrarse($estado);

    }
    else{
        $this->usuariosModel->ingresarUsuario($usuario);
        session_start();
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['ultima_conexion'] = time();
        $_SESSION['administrador'] = '0';

        PageHelpers::homePage();
    }

  }



  function editarPermisos($params = []){
     session_start();
     if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == '1') ){
        $usuario= $this->usuariosModel->retornarUsuario($params[0]);
        if ($usuario['administrador'] == '1'){
            $this->usuariosModel->editarPermisos($usuario['id_usuario'], '0');
        }
        else{
            $this->usuariosModel->editarPermisos($usuario['id_usuario'], '1');
        }
        PageHelpers::usuariosPage();
     }
  }

  function borrarUsuario($params = []){
    session_start();
    if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == '1') ){
        $this->usuariosModel->borrarUsuario($params[0]);
        PageHelpers::usuariosPage();
      }
  }


}
 ?>

