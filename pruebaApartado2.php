<?php
   function __autoload($name) {
    include_once 'includes/class.' . $name . '.php';
 }
//    spl_autoload_register(function($name) {
//       include_once 'includes /class.' . $name . '.php';
//   });

    $vehiculoRojo = new Vehiculo("rojo", 450.);
    $vehiculoRojo->circula();
    echo "<br>";
    $vehiculoRojo->añadir_persona(50.);
    $vehiculoRojo->añadir_persona(60.);
    echo $vehiculoRojo->__get("peso");
?>