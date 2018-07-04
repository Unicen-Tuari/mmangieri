 <?php
 class SecureController
 {
   function __construct()
   {
     session_start();
     if(isset($_SESSION['email'])){
       if (time() - $_SESSION['ultima_conexion'] > 300000000000) {
         PageHelpers::logoutPage();
       }
       $_SESSION['ultima_conexion'] = time();
     }
     else {
        PageHelpers::loginPage();
     }
   }
 }
  ?>
