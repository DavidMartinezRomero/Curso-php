<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="recive.php" method="post">

      <input type="text" name="nombre" placeholder="Nombre">
      <br>

      <label for="hombre"> Hombre </label>
      <input type="radio" name="sexo" value="hombre" id="hombre">

      <label for="mujer"> Mujer </label>
      <input type="radio" name="sexo" value="mujer" id="mujer">
      <br>

      <select name="year" id="year">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
      </select>
      <br>

      <label for="terminos"> Aceptas los terminos? </label>
      <input type="checkbox" name="teminos" id="terminos" value="ok">

      <input type="submit" value="enviar">

    </form>
  </body>
</html>
