<?php
    class Animal {
        protected  $nombre;
        protected  $edad;
    
        public function __construct( $nombre, $edad = 0) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
    }

    class Gato extends Animal{
        
        function __construct($nombre, $edad, $raza) {
            parent::__construct($nombre, $edad);
            print "En el constructor SubClass\n";
        }
    }

    class Perro extends Animal{

    }
?>