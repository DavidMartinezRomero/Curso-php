<?php

//print_r($_POST);

if ($_POST) {
    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $year = $_POST["year"];
    $terminos = $_POST["terminos"];
    echo 'Hola, ' . $nombre . ' eres ' . $sexo;

} else {
    header('Location: http://localhost/curso_php/formularios/')
}

?>
