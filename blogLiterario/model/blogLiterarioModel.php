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
	
	function obtenerAutor($id_autor){
      $sentencia = $this->db->prepare("SELECT * from autor where id_autor = ?");
      $sentencia->execute([$id_autor]);
      return $sentencia->fetch();
    }

    function obtenerLibro($id_libro){
      $sentencia = $this->db->prepare("SELECT * from libro where id_libro=?");
      $sentencia->execute([$id_libro]);
      return $sentencia->fetch();
    }

    function obtenerLibrosAutor($id_autor){
      $sentencia= $this->db->prepare("SELECT * from libro where id_autor=?");
      $sentencia->execute([$id_autor]);
      return $sentencia->fetchAll();
    }
    
}
?>