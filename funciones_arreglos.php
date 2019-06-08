<?php

//$amigo = array('nombre' => Alfredo, 'telefono' => 5512327405, 'edad'=> 28);

$semana = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');

// extract($amigo);
// echo $telefono;

$ultimo_dia = array_pop($semana);
//echo $ultimo_dia;

// foreach ($semana as $dia) {
//   echo $dia . '<br/>';
// }

//echo join('<br/>', $semana);
//echo count($semana);
$semana_reverse = array_reverse($semana);
echo join(', ', $semana_reverse);

 ?>
