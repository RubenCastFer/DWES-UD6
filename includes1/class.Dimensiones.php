<?php
    class Dimensiones{
        private float $alto;
        private float $ancho;
        private float $largo;

        public function __construct($alto, $ancho, $largo){
            $this->alto = $alto;
            $this->ancho = $ancho;
            $this->largo = $largo;
        }

        public function __get($name)
        {
            return $this->$name;
        }

        public function __set($name, $value)
        {
            if ($value>1 && is_float($value)){
                $this->$name=$value;
            }else{
                echo "error __setDi";
                die();
            }
            
        }

        public function __toString(){
            return "alto=". $this->alto .", ancho=". $this->ancho .", largo= ". $this->largo;
        }
    }
?>