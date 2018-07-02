<?php
require_once "./libs/Smarty.class.php";

class adminView{
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty;
    }

    function mostrarCrearLibro($autores){
      $this->smarty->assign("autores",$autores);
      $this->smarty->display("crearLibro.tpl");
    }

    function mostrarCrearAutor(){
      $this->smarty->display("crearAutor.tpl");
    }

    function mostrarAutores($autores){
      $this->smarty->assign("autores",$autores);
      $this->smarty->display("mostrarAutoresAdmin.tpl");
    }

    function mostrarLibro($libro, $autor){
      $this->smarty->assign("libro",$libro);
      $this->smarty->assign("autor", $autor);
      $this->smarty->display("mostrarLibroAdmin.tpl");
    }

    function mostrarLibrosAutor($librosAutor, $autor){
      $this->smarty->assign("librosAutor", $librosAutor);
      $this->smarty->assign("autor", $autor);
      $this->smarty->display("mostrarLibrosAutorAdmin.tpl");
    }


    function listarLibros($libros, $autores){
      $this->smarty->assign("libros", $libros);
      $this->smarty->assign("autores", $autores);
      $this->smarty->display("listarLibros.tpl");
    }

    function mostrarEditarAutor($autor){
        $this->smarty->assign("autor", $autor);
        $this->smarty->display("editarAutor.tpl");
    }
    function mostrarEditarLibro($libro,$autores){
        $this->smarty->assign("libro", $libro);
        $this->smarty->assign("autores", $autores);
        $this->smarty->display("editarlibro.tpl");
    }
}

 ?>