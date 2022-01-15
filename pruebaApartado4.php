<?php
//    function __autoload($name) {
//     include_once 'includes/class.' . $name . '.php';
//  }
  spl_autoload_register(function($name) {
    include_once 'includes/class.' . $name . '.php';
  });

  $moto = new DosRuedas("transparente", 1550.,125);
  $moto->añadir_persona(70.);
  $moto->__set("color","verde");
  $moto->__set("cilindrada",1000);
  $moto->verAtributo($moto);

  $camion = new Camion("blaco", 6000., 2, 6);
  $camion->añadir_persona(84.);
  $camion->repintar("azul");
  $camion->numeroPuertas=2;
  $camion->verAtributo($camion);

?>