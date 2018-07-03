<?php

class UsuariosModel {

  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=blogliterario;charset=utf8'
            , 'root', '');
  }

  function obtenerUsuario($email)
  {
    $sentencia = $this->db->prepare( "SELECT * from usuario where email = ?");
    $sentencia->execute([$email]);
    return $sentencia->fetch();
  }
  function ingresarUsuario($usuario){
    $this->db->beginTransaction();
    $sentencia= $this->db->prepare("INSERT INTO usuario(email, pass, nombre, apellido) VALUES (?,?,?,?)");
    $sentencia->execute([$usuario['email'], $usuario['pass'], $usuario['nombre'], $usuario['apellido']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }

  //  function borrarUsuario($id_usuario){
  //    $sentencia= $this->db->prepare("DELETE from usuario where id_usuario=?");
  //    $sentencia->execute([$id_usuario]);
  //  }

    //function editarPermisos($id_usuario, $permiso){
    //  $sentencia= $this->db->prepare("UPDATE usuario set administrador=? where id_usuario=?");
    //  $sentencia->execute([[$permiso],[$id_usuario]]);
    //}

    function listarUsuarios(){
      $sentencia= $this->db->prepare("SELECT * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll();
    }
    
}
?>
