<?php
    class Vehiculo{
        private string $color;
        private float $peso;

        public function __construct($color, $peso){
            $this->color=$color;
            $this->peso=$peso;
        }
             
        public function __set($name, $value){
            $this->$name=$value;
        }

        public function __get($name){
            return $this->$name;
        }

        public function circula(){
            echo "El vehículo está circulando";
        }

        public function añadir_persona($pesoPersona){
            $this->peso = $this->peso+$pesoPersona;
        }
    }

?>