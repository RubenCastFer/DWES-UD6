<?php
    class CuatroRuedas extends Vehiculo{
        
        private int $numeroPuertas;

        public function __construct($color, $peso, $numeroPuertas){
            parent::__construct($color,$peso);
            $this-> numeroPuertas=$numeroPuertas;
        }
             
        public function __set($name, $value)
        {
            $this->$name=$value;
        }

        public function __get($name)
        {
            return $this->$name;
        }

        public function repintar($color){
            
        }
    }

?>