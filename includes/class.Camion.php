<?php
    class Camion extends CuatroRuedas{
        private float $longitud;

        public function __construct($color,$peso,$numeroPuertas,$longitud){
            parent::__construct($color,$peso,$numeroPuertas);
            $this->longitud=$longitud;
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

        public function añadirRemolque($longitudRemolque){
            $this->longitud=$this->longitud+$longitudRemolque;
        }

    }
?>