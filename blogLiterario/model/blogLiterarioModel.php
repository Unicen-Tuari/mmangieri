<?php

class blogLiterarioModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=blogliterario;charset=utf8','root','');
    }

    function obtenerAutores(){
      $sentencia = $this->db->prepare("SELECT * from autor");
      $sentencia->execute();
      return $sentencia->fetchAll();
    }

}
?>
