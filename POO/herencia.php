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

//prueba

class Estudiante extends Persona{

  function __construct($nombre, $edad, $pais, $carrera)  {
      parent::__construct($nombre, $edad, $pais);
      $this->carrera = $carrera;
  }
}


$carlos = new Estudiante('Carlos' , 28 , 'Mèxico', 'Desarrollador');
echo $carlos->mostrarInformacion();
