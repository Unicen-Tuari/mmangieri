<?php
require_once "./model/usuariosModel.php";
require_once "./view/loginView.php";

class LoginController {

  private $usuariosModel;
  private $loginView;

  function __construct(){
    $this->usuariosModel = new UsuariosModel();
    $this->loginView = new LoginView();
  }

  function login($params = [])
  {
    $this->loginView->mostrarLogin();
  }

  function logout($params = [])
  {
    session_start();
    session_destroy();
    PageHelpers::homePage();
  }

  function validarLogin($params = [])
  {
    $usuario = $this->usuariosModel->obtenerUsuario($_POST['email']);
    if(password_verify($_POST['pass'], $usuario['pass'])){
      session_start();
      $_SESSION['email'] = $_POST['email'];
     $_SESSION['ultima_conexion'] = time();
      if($usuario['administrador']){
        $_SESSION['administrador'] = $usuario['administrador'];
      }
      else{
            $_SESSION['administrador']= 0;
          }
             PageHelpers::homePage();
    }
    else {
          PageHelpers::loginPage();
    }
  }

  function  registrarse($params = []){
      $this->loginView->registrarse();
  }


}
 ?>
