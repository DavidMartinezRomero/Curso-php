<?php

$errores = '';
$enviado = 0;

if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if (!empty($usuario)) {
        $usuario = trim($usuario);
        $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Ingresa un usuario </br>';
    }

    if (!empty($password)) {
        $password = filter_var($password, FILTER_SANITIZE_ENCODED);
        $password = trim($password);
    } else {
        $errores .= 'Ingresa una contraseña </br>';
    }

    $enviado = 1;

    //prueba comentario
      
} 

require 'index.view.php';

 ?>
