<?php

$errores ='';

if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];

  if (!empty($nombre)) {
//    $nombre= trim($nombre);
//    $nombre= htmlspecialchars($nombre);
//    $nombre= stripslashes($nombre);


    $nombre= filter_var($nombre, FILTER_SANITIZE_STRING);
    echo 'Tu nombre es : ' . $nombre . '</br>';
  } else {
      $errores .= 'Por favor agrega un nombre' . '<br>';
  }

  if (!empty($correo)) {
      $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

      if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores .= 'Por favor ingresa un correo valido' . '<br>';
    } else {
        echo 'Tu correo es : ' . $correo . '</br>';
    }

  } else {
      $errores .= 'Por favor agrega un correo' . '<br>';
  }
}
?>

<html>
  <head>
    <title>INPUT</title>
  </head>
  <style>
    .error{color:red;}
  </style>
  <body>
  <form action="<?php echo htmlspecialchars($_SERVER[PHP_SELF]) ?>" method="POST">

    <input type="text" placeholder="Nombre:" name="nombre">
    <input type="correo" placeholder="correo:" name="correo">

    <?php if(!empty($errores)): ?>
        <div class="error"> <?php echo $errores; ?> </div>
    <?php endif; ?>

    <input type="submit" name="submit">

  </form>

  </body>
</html>
