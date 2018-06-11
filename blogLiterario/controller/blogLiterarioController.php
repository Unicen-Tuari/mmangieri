<?php
require_once "./model/blogLiterarioModel.php";
require_once "./view/blogLiterarioView.php";

class blogLiterarioController{
  private $blogLiterarioModel;
  private $blogLiterarioView;

  function __construct(){
      $this->blogLiterarioModel= new blogLiterarioModel();
      $this->blogLiterarioView= new blogLiterarioView();
  }

  function mostrarAutores($params=[]){
		$autores= $this->blogLiterarioModel->obtenerAutores();
		$this->blogLiterarioView->mostrarAutores($autores);
  }

  function mostrarLibro($params= []){
      $libro=$this->blogLiterarioModel->obtenerLibro($params[0]);
      $autor= $this->blogLiterarioModel->obtenerAutor($libro['id_autor']);
      $this->blogLiterarioView->mostrarLibro($libro, $autor);
  }

  function mostrarLibrosAutor($params= []){
		$librosAutor= $this->blogLiterarioModel->obtenerLibrosAutor($params[0]);
		$autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
		$this->blogLiterarioView->mostrarLibrosAutor($librosAutor, $autor);
  }
    function crearLibro($params = []){
      $this->blogLiterarioView->mostrarCrearLibro();
  }
  
  function guardarLibro($params = []){
    $autor= $this->blogLiterarioModel->obtenerIdAutor($_POST['autor']);
    $libro= ['id_autor'=>$autor['id_autor'],
              'titulo'=> $_POST['titulo'],
              'genero'=>$_POST['genero'],
              'sinopsis'=>$_POST['sinopsis']
            ];
    $this->blogLiterarioModel->insertarLibro($libro);
  }
  
  function crearAutor($params = []){
      $this->blogLiterarioView->mostrarCrearAutor();
  }

  
}
 ?>
