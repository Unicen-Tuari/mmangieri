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
		$this->blogLiterarioView->mostrarLibro($libro);
  }

  function mostrarLibrosAutor($params= []){
		$librosAutor= $this->blogLiterarioModel->obtenerLibrosAutor($params[0]);
		$autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
		$this->blogLiterarioView->mostrarLibrosAutor($librosAutor, $autor);
  }
  
}
 ?>
