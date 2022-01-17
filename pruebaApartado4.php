<?php
   function __autoload($name) {
    include_once 'includes/class.' . $name . '.php';
 }
  // spl_autoload_register(function($name) {
  //   include_once 'includes/class.' . $name . '.php';
  // });

  $moto = new DosRuedas("transparente", 1550.,125);
  $moto->añadir_persona(70.);
  $moto->color="verde";
  $moto->__set("cilindrada",1000);
  Vehiculo::verAtributo($moto);

  $camion = new Camion("blaco", 6000., 2, 6);
  $camion->añadir_persona(84.);
  $camion->repintar("azul");
  $camion->numeroPuertas=2;
  Vehiculo::verAtributo($camion);

  $moto1 = new DosRuedas("transparente", 1550.,125);
  $moto1->añadir_persona(70.);
  $moto1->color="verde";
  $moto1->__set("cilindrada",1000);
  Vehiculo::verAtributo($moto1);

?>