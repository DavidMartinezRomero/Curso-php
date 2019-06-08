<?php

class Persona {
    public static $dia = '7 de septiembre';

    public static function saludo($nombre = null) {
        if ($nombre) {
            return 'Hola buen dìa ' . $nombre;
        } else {
            return 'Hola buen dìa.';
        }
    }
}

// $carlos = new Persona();
// echo $carlos->saludo('Carlos');

echo Persona::saludo();

?>
