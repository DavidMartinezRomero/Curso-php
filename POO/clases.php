<?php

class Persona {
  public $nombre;
  public $edad;
  public $pais;

  public function mostrarInformacion() {
    echo 'Hola mundo';
  }

}

$carlos = new Persona;
$carlos -> nombre = 'Carlos Alberto';
$carlos-> edad = 28;
$carlos-> pais = 'México';

$carlos->mostrarInformacion();

$alejandro = new Persona;
$alejandro-> nombre = 'Alejandro';
$alejandro-> edad = 30;
$alejandro-> pais = 'España';

 ?>
