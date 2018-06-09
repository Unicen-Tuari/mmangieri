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

}

?>
