<?php
//    function __autoload($name) {
//     include_once 'includes/class.' . $name . '.php';
//  }
   spl_autoload_register(function($name) {
      include_once 'includes/class.' . $name . '.php';
  });



    $cocheAzul = new Coche("Azul",650.,4,0);
    echo $cocheAzul->peso;
    echo "<br>";
    $cocheAzul->añadir_persona(700.);
    echo $cocheAzul->peso;
    echo "<br>";
    echo $cocheAzul->color;
    echo "<br>";
    echo "<br>";

    $cocheAzul->repintar("amarillo");
    $cocheAzul->añadirCadenasNieve(3);
    echo $cocheAzul->color;
    echo "<br>";
    echo $cocheAzul->numeroCadenasNieve;
    echo "<br>";
    echo "<br>";
    
    $moto = new DosRuedas("marron",30., 125);
    $moto->añadir_persona(2);
    $moto->ponerGasolina(2000);
    echo $moto->color;
    echo "<br>";
    echo $moto->peso;

?>