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

}
 ?>
