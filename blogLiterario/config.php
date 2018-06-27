<?php
$acciones = [
  // "" => "", //pagina principal
  // "login" => "LoginController#validarLogin",
  // "logout" => "LoginController#logout",
//  "ver"
  "listarLibros"=>"blogLiterarioController*listarLibros",
  "verAutores"=> "blogLiterarioController*mostrarAutores",
  "verLibrosAutor"=>"blogLiterarioController*mostrarLibrosAutor",
  "verLibro"=>"blogLiterarioController*mostrarLibro",
  "crearLibro"=>"blogLiterarioController*crearLibro",
  "guardarLibro"=>"blogLiterarioController*guardarLibro",
  "crearAutor"=>"blogLiterarioController*crearAutor",
  "guardarAutor"=>"blogLiterarioController*guardarAutor",
  "borrarLibro"=>"blogLiterarioController*borrarLibro",
  "borrarAutor"=>"blogLiterarioController*borrarAutor"
];
?>
