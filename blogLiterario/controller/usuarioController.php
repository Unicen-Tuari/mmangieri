<?php
require_once "./model/blogLiterarioModel.php";
require_once "./view/usuarioView.php";

class usuarioController{
  private $blogLiterarioModel;
  private $usuarioView;

  function __construct(){
      $this->blogLiterarioModel= new blogLiterarioModel();
      $this->usuarioView= new usuarioView();
  }

  function mostrarAutores($params=[]){
    $autores= $this->blogLiterarioModel->obtenerAutores();
    $this->usuarioView->mostrarAutores($autores);
  }

  function mostrarLibro($params= []){
      $libro=$this->blogLiterarioModel->obtenerLibro($params[0]);
      $autor= $this->blogLiterarioModel->obtenerAutor($libro['id_autor']);
      $this->usuarioView->mostrarLibro($libro, $autor);
  }

  function mostrarLibrosAutor($params= []){
      $librosAutor= $this->blogLiterarioModel->obtenerLibrosAutor($params[0]);
      $autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
      $this->usuarioView->mostrarLibrosAutor($librosAutor, $autor);
  }

  function listarLibros($params= []){
      $libros= $this->blogLiterarioModel->listarLibros();
      $autores= $this->blogLiterarioModel->obtenerAutores();
      $this->usuarioView->listarLibros($libros, $autores);
  }

  function mostrarDetalleAutor($params= []){
      $autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
      $this->usuarioView->mostrarDetalleAutor($autor);
  }
}
 ?>
