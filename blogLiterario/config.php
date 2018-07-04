<?php
$acciones = [
   "" => "libroController*listarLibros", //pagina principal

   "login" => "loginController*Login",
   "validarLogin"=>"loginController*validarLogin",
   "logout" => "loginController*logout",
   "registro"=> "loginController*registrarse",
   "ingresarUsuario"=> "usuariosController*ingresarUsuario",
   "listarUsuarios"=>"usuariosController*listarUsuarios",
   "editarPermisos"=>"usuariosController*editarPermisos",
   "borrarUsuario"=>"usuariosController*borrarUsuario",

   "listarLibros"=>"libroController*listarLibros",

  "verAutores"=> "autorController*mostrarAutores",

  "verLibrosAutor"=>"libroController*mostrarLibrosAutor",

  "verLibro"=>"libroController*mostrarLibro",

  "crearLibro"=>"libroController*crearLibro",
  "editarLibro"=>"libroController*editarLibro",
  "actualizarLibro"=>"libroController*actualizarLibro",
  "guardarLibro"=>"libroController*guardarLibro",
  "borrarLibro"=>"libroController*borrarLibro",

  "crearAutor"=>"autorController*crearAutor",
  "editarAutor"=>"autorController*editarAutor",
  "actualizarAutor"=>"autorController*actualizarAutor",
  "guardarAutor"=>"autorController*guardarAutor",
  "borrarAutor"=>"autorController*borrarAutor",

  "mostrarDetalleAutor"=>"autorController*mostrarDetalleAutor"
];
?>