<?php
require_once "./libs/Smarty.class.php";
class blogLiterarioView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function mostrarAutores($autores){
      $this->smarty->assign("autores",$autores);
      $this->smarty->display("mostrarAutores.tpl");
    }

    function mostrarLibro($libro, $autor){
      $this->smarty->assign("libro",$libro);
      $this->smarty->assign("autor", $autor);
      $this->smarty->display("mostrarLibro.tpl");
    }

    function mostrarLibrosAutor($librosAutor, $autor){
      $this->smarty->assign("librosAutor", $librosAutor);
      $this->smarty->assign("autor", $autor);
      $this->smarty->display("mostrarLibrosAutor.tpl");
    }


    function listarLibros($libros, $autores){
      $this->smarty->assign("libros", $libros);
      $this->smarty->assign("autores", $autores);
      $this->smarty->display("listarLibros.tpl");
    }

    function mostrarDetalleAutor($autor){
      $this->smarty->assign("autor",$autor);
      $this->smarty->display("mostrarDetalleAutor.tpl");
    }
}
?>
