<?php

class PageHelpers
{
  public static function homePage()
  {
    header("Location: ".BASEURL."listarLibros");
    die();
  }

  public static function loginPage()
  {
    header("Location: ".BASEURL."login");
    die();
  }

  public static function logoutPage()
  {
    header("Location: ".BASEURL."logout");
    die();
  }

  public static function librosAutorPage($libro)
  {
    header("Location: ".BASEURL."verLibrosAutor/".$libro['id_autor']);
    die();
  }

  public static function AutoresPage()
  {
    header("Location: ".BASEURL."verAutores");
    die();
  }

  public static function usuariosPage()
  {
    header("Location: ".BASEURL."listarUsuarios");
    die();
  }

}


 ?>
