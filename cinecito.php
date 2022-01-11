<?php
   // function __autoload($name) {
   //    include_once 'includes/class.' . $name . '.php';
   // }
   spl_autoload_register(function($name) {
      include 'includes/class.' . $name . '.php';
  });

   $cines[0] = new Cine('Alicante', 'Calle 1', 1, new Dimensiones(10., 10., 10.),'Razon 1', 'C0001A', 10);
   $cines[1] = new Cine('Alicante', 'Calle 2', 2, new Dimensiones(20., 20., 20.),'Razon 2', 'C0002B', 20);
   $cines[2] = new Cine('Alicante', 'Calle 3', 3, new Dimensiones(30., 30., 30.),'Razon 3', 'C0001C', 30);
   $copia = clone $cines[1];
   $copia->Dimensiones->alto = 40.;
   $copia->Dimensiones->ancho = 50.;
   $copia->Dimensiones->largo = 60.;
   foreach ($cines as $cine)
      echo $cine.'<br>';
   echo $copia;
   echo 'Área: ' . $copia->area . ' m2';
?>
