<?php
require_once "./model/blogLiterarioModel.php";
require_once "controller/SecureController.php";
require_once "./view/adminView.php";
require_once "./view/usuarioView.php";
require_once "./view/blogLiterarioView.php";

class autorController extends SecureController{
  private $adminView;
  private $usuarioView;
  private $blogLiterarioView;
  private $blogLiterarioModel;

  function __construct(){
    $this->adminView= new adminView();
    $this->usuarioView= new usuarioView();
    $this->blogLiterarioView= new blogLiterarioView();
    $this->blogLiterarioModel= new blogLiterarioModel();
  }
  function crearAutor($params = []){
    session_start();
    if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
      $this->adminView->mostrarCrearAutor();
    }
  }

  function guardarAutor($params = []){
        $autor=['nombre'=>$_POST['nombre'],
                'biografia'=>$_POST['biografia']
              ];
        $this->blogLiterarioModel->insertarAutor($autor);
        PageHelpers::AutoresPage();
  }

  function actualizarAutor($params = []){
      $autor=['id_autor'=> $params[0],
              'nombre'=>$_POST['nombre'],
              'biografia'=>$_POST['biografia']
            ];
      $this->blogLiterarioModel->editarAutor($autor);
      PageHelpers::AutoresPage();
  }

  function borrarAutor($params = []){
    session_start();
    if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
        $this->blogLiterarioModel->borrarAutor($params[0]);
        PageHelpers::AutoresPage();
      }
  }

    function editarAutor($params = []){
      session_start();
      if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
          $autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
          $this->adminView->mostrarEditarAutor($autor);
        }
    }

    function mostrarAutores($params=[]){
      $autores= $this->blogLiterarioModel->obtenerAutores();
      session_start();
      if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
          $this->adminView->mostrarAutores($autores);
      }
      else {
        if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 0) ){
            $this->usuarioView->mostrarAutores($autores);
        }
        else{
          $this->blogLiterarioView->mostrarAutores($autores);
        }
    }
  }

    function mostrarDetalleAutor($params= []){
        $autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
        session_start();
        if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
            $this->adminView->mostrarDetalleAutor($autor);
        }
        else {
          if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 0) ){
            $this->usuarioView->mostrarDetalleAutor($autor);
          }
          else{
            $this->blogLiterarioView->mostrarDetalleAutor($autor);
          }
        }
    }


}
?>
