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

    function obtenerIdAutor($nombre){
      $sentencia = $this->db->prepare("SELECT * from autor where nombre= ?");
      $sentencia->execute([$nombre]);
      return $sentencia->fetch();
    }

    function obtenerLibro($id_libro){
      $sentencia = $this->db->prepare("SELECT * from libro where id_libro= ? ");
      $sentencia->execute([$id_libro]);
      return $sentencia->fetch();
    }

    function obtenerLibrosAutor($id_autor){
      $sentencia= $this->db->prepare("SELECT * from libro where id_autor= ? ");
      $sentencia->execute([$id_autor]);
      return $sentencia->fetchAll();
    }

    function insertarLibro($libro){
      $this->db->beginTransaction();
      $sentencia= $this->db->prepare("INSERT INTO libro(id_autor, titulo, genero, sinopsis) VALUES (?,?,?,?)");
      $sentencia->execute([$libro['id_autor'], $libro['titulo'], $libro['genero'], $libro['sinopsis']]);
      $this->db->commit();
      return $this->db->lastInsertId();
    }

    function insertarAutor($autor){
      $this->db->beginTransaction();
      $sentencia= $this->db->prepare("INSERT INTO autor(nombre, biografia) VALUES (?,?)");
      $sentencia->execute([$autor['nombre'], $autor['biografia']]);
      $this->db->commit();
      return $this->db->lastInsertId();
    }

    function editarAutor($autor){

      $sentencia= $this->db->prepare("UPDATE autor SET nombre= ?, biografia=? where id_autor= ?");
      $sentencia->execute([$autor['nombre'], $autor['biografia'], $autor['id_autor']]);
    }
    
    function editarLibro($libro){

      $sentencia= $this->db->prepare("UPDATE libro SET titulo= ?, id_autor=?, genero=?, sinopsis=? where id_libro= ?");
      $sentencia->execute([$libro['titulo'], $libro['id_autor'], $libro['genero'], $libro['sinopsis'], $libro['id_libro']]);

    }

    function borrarLibro($id_libro){
      $sentencia= $this->db->prepare("DELETE from libro where id_libro= ?");
      $sentencia->execute([$id_libro]);

    }

    function borrarAutor($id_autor){
      $sentencia= $this->db->prepare("DELETE from autor where id_autor= ?");
      $sentencia->execute([$id_autor]);
    }

    function listarLibros(){
      $sentencia=$this->db->prepare("SELECT * from libro");
      $sentencia->execute();
      return $sentencia->fetchAll();
    }
}
?>
