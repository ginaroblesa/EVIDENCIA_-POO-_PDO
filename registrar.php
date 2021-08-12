<?php
 require_once ('User.php');


 $usuario=new User();
 $email = $_REQUEST['email'];
 $password = $_REQUEST['password'];
 
 $usuario->registrar($email,$password);
 if($_REQUEST['cerrar']){
     $usuario->sessionexit();
 }
 

?>