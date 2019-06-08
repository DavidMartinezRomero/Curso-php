<?php

class Persona {
  public $nombre;
  public $edad;
  public $pais;

  function __construct($nombre, $edad, $pais) {
      $this->nombre = $nombre;
      $this->edad = $edad;
      $this->pais = $pais;
  }

  public function mostrarInformacion() {
    return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
  }

}

$carlos = new Persona('Carlos' , 28 , 'Mèxico');
// $carlos -> nombre = 'Carlos Alberto';
// $carlos-> edad = 28;
// $carlos-> pais = 'México';
echo $carlos->mostrarInformacion();

echo '<br>';

$alejandro = new Persona('Alejandro' , 30 , 'España');
// $alejandro-> nombre = 'Alejandro';
// $alejandro-> edad = 30;
// $alejandro-> pais = 'España';
echo $alejandro->mostrarInformacion();

 ?>
