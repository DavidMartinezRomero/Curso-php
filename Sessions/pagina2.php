<?php

session_start();
if ($_SESSION) {
  $nombre = $_SESSION['nombre'];
  echo "<h1> Hola, $nombre </h1>";
} else {
  echo 'No has iniciado sesion';
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina2</title>
  </head>
  <body>
    <br>
    <a href="cerrar.php">Cerrar Sesiòn</a>
  </body>
</html>
