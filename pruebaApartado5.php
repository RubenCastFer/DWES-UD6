<?php
   function __autoload($name) {
    include_once 'includes/class.' . $name . '.php';
 }
  // spl_autoload_register(function($name) {
  //   include_once 'includes/class.' . $name . '.php';
  // });

  $coche = new Coche("verde", 2100., 4, 0);
  // var_dump($coche);

  $coche->añadirCadenasNieve(2);
  $coche->añadirPersona(80.);
  $coche->repintar("azul");
  $coche->quitarCadenasNieve(4);
  $coche->repintar("negro");
  Vehiculo::verAtributo($coche);

  //var_dump($coche);

?>