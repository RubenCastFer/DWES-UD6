<?php
    class DosRuedas extends Vehiculo{
        
        private int $cilindrada;

        public function __construct($color, $peso, $cilindrada){
            parent::__construct($color,$peso);
            $this-> cilindrada=$cilindrada;
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

        public function ponerGasolina($litros){
            $peso=$litros*1.5;
            $this->peso=$this->peso+$peso;
        }

        public function añadir_persona($pesoPersona){
            $this->peso = $this->peso+$pesoPersona+1.5;
        }
    }

?>