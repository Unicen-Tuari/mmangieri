<?php
require_once "./libs/Smarty.class.php";

class usuarioView{
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty;
    }

    function listarUsuarios($usuarios){
      $this->smarty->assign("usuarios",$usuarios);
      $this->smarty->display("listarUsuarios.tpl");
    }


  }

 ?>