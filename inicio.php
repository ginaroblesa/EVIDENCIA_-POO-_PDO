<?php
session_start();

if (!$_SESSION) {
  header("Location:http://localhost:8080/evidencia_php/poo/login.php");
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
</head>
<body>
  <h1>Sesión iniciada, Hola 
    <?php echo $_SESSION['email']; ?>
  </h1>

  <!-- BOTON DENTRO DE UN FORM PARA CERRAR SESION https://www.w3schools.com/php/php_sessions.asp-->
  <form action="sessionexit.php" method="post">
    <button type="submit">sesion exit</button>
  </form>
</body>
</html>