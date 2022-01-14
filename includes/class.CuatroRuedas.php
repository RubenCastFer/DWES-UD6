<?php
    class CuatroRuedas extends Vehiculo{
        
        private int $numeroPuertas;

        public function __construct($color, $peso, $numeroPuertas){
            parent::__construct($color, $peso);
            $this-> numeroPuertas=$numeroPuertas;
        }
             
        public function __set($name, $value){
            if (property_exists(get_class(),$name)) {
                $this->$name=$value;
             }else{
                parent::__set($name,$value);
             }        }

        public function __get($name){
            if (property_exists(get_class(),$name)) {
               return $this->$name;
            }else{
               return parent::__get($name);
            }
        }

        public function repintar($color){
            $this->color=$color;
        }
    }

?>