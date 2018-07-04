<?php
  DEFINE('BASEURL','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
  require_once "config.php";
  require_once "./helpers/PageHelpers.php";

  require_once "controller/usuariosController.php";
  require_once "controller/loginController.php";

    require_once "controller/libroController.php";
    require_once "controller/autorController.php";

  $params= explode("/", $_GET["action"]);
  $action= $params[0];
  $others= array_slice($params, 1, count($params));
  $funcion= "error";
  $controlleryfuncion= explode("*", $acciones[$action]);
  $controller= $controlleryfuncion[0];
  $funcion= $controlleryfuncion[1];

  $controllerObjeto= new $controller();
  $controllerObjeto->$funcion($others);
  ?>

