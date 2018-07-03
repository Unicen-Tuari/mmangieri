<?php
require_once "./model/blogLiterarioModel.php";
require_once "controller/SecureController.php";
require_once "./view/adminView.php";
require_once "./view/usuarioView.php";
require_once "./view/blogLiterarioView.php";

class libroController extends SecureController{
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

  function crearLibro($params = []){
      session_start();
      if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
          $autores= $this->blogLiterarioModel->obtenerAutores();
          $this->adminView->mostrarCrearLibro($autores);
      }
  }

    function guardarLibro($params = []){
        $libro= ['id_autor'=>$_POST['autor'],
            'titulo'=> $_POST['titulo'],
            'genero'=>$_POST['genero'],
            'sinopsis'=>$_POST['sinopsis']
          ];
              $this->blogLiterarioModel->insertarLibro($libro);
              PageHelpers::librosAutorPage($libro);

    }

    function actualizarLibro($params = []){
      $libro=['id_libro'=> $params[0],
              'id_autor'=>$_POST['autor'],
              'titulo'=>$_POST['titulo'],
              'genero'=>$_POST['genero'],
              'sinopsis'=>$_POST['sinopsis']
            ];
          $this->blogLiterarioModel->editarLibro($libro);
          PageHelpers::librosAutorPage($libro);
    }

    function borrarLibro($params = []){
      session_start();
      if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
          $libro= $this->blogLiterarioModel->obtenerLibro($params[0]);
          $autor=$this->blogLiterarioModel->obtenerAutor($libro['id_autor']);
          $this->blogLiterarioModel->borrarLibro($params[0]);
          PageHelpers::librosAutorPage($libro);
      }
    }

    function editarLibro($params = []){
      session_start();
      if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
        $autores= $this->blogLiterarioModel->obtenerAutores();
        $libro= $this->blogLiterarioModel->obtenerLibro($params[0]);
        $this->adminView->mostrarEditarLibro($libro, $autores);
      }
    }

    function mostrarLibro($params= []){
      $libro=$this->blogLiterarioModel->obtenerLibro($params[0]);
      $autor= $this->blogLiterarioModel->obtenerAutor($libro['id_autor']);
      session_start();
      if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
          $this->adminView->mostrarLibro($libro, $autor);
        }
        else{
            if(isset($_SESSION['administrador'])&& ($_SESSION['administrador'] == 0) ){
                $this->usuarioView->mostrarLibro($libro, $autor);
            }
          else{
            $this->blogLiterarioView->mostrarLibro($libro, $autor);
          }
        }
    }

    function mostrarLibrosAutor($params= []){
      $librosAutor= $this->blogLiterarioModel->obtenerLibrosAutor($params[0]);
      $autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
      session_start();
      if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
          $this->adminView->mostrarLibrosAutor($librosAutor, $autor);
        }
        else{
            if(isset($_SESSION['administrador'])&& ($_SESSION['administrador'] == 0) ){
                $this->usuarioView->mostrarLibrosAutor($librosAutor, $autor);
            }
            else{
              $this->blogLiterarioView->mostrarLibrosAutor($librosAutor, $autor);
            }
          }
    }

    function listarLibros($params= []){
      $libros= $this->blogLiterarioModel->listarLibros();
      $autores= $this->blogLiterarioModel->obtenerAutores();
      session_start();
      if(isset($_SESSION['administrador']) && ($_SESSION['administrador'] == 1) ){
          $this->adminView->listarLibros($libros, $autores);
        }
        else{
            if(isset($_SESSION['administrador'])&& ($_SESSION['administrador']==0) ){
                $this->usuarioView->listarLibros($libros, $autores);
            }
          else{
            $this->blogLiterarioView->listarLibros($libros, $autores);
          }
        }
    }

}
 ?>
