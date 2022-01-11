<?php
    class Local{
        private string $ciudad;
        private string $calle;
        private int $plantas;
        private float $area;
        private Dimensiones $dimensiones;

        public function __construct($ciudad,$calle,$plantas,$dimensiones)
        {
            $this->ciudad=$ciudad;
            $this->calle=$calle;
            $this->plantas=$plantas;
            $this->dimensiones=$dimensiones;
            
            
        }

        public function __set($name, $value)
        { 
            if ($name == "plantas" && $value >=1 && $value <=10) {
                $this->name=$value;
            }
            if ($name=="dimensiones" && $name instanceof Dimensiones) {
                $this->name=$value;
                $this->area=$value->ancho*$value->largo;
            }
            if ($name=="calle" || $name=="ciudad") {
                $this->name=$value;
            }

            
        }

    }
?>