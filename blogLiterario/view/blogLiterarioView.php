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

    function mostrarLibro($libro){
      $this->smarty->assign("libro",$libro);
      $this->smarty->display("mostrarLibro.tpl");
    }
	function mostrarLibrosAutor($librosAutor, $autor){
      $this->smarty->assign("librosAutor", $librosAutor);
      $this->smarty->assign("autor", $autor);
      $this->smarty->display("mostrarLibrosAutor.tpl");
    }
}

?>
