<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="wrap">
      <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?php if($enviado && isset($usuario)) echo $usuario ?>">

        <input type="password" class="form-control" id="correo" name="password" placeholder="Contraseña" value="<?php if($enviado && isset($password)) echo $password ?>">

        <?php if (!empty($errores)): ?>
            <div class="alert error">
                <?php echo $errores; ?>
            </div>

        <?php elseif ($enviado == 1) : ?>
          <div class="alert success">
              <p> Enviado correctamente </p>
          </div>

        <?php endif; ?>

        <input type="submit" name="submit" class="btn btn-primary" value="Enviar">

      </form>
    </div>
  </body>
</html>
