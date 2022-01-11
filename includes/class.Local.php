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
            if ($name == "plantas" && $value > 0 && $value <11 && is_int($value)) {
                $this->name=$value;
            }elseif ($name=="dimensiones") {
                if ($name instanceof Dimensiones) {
                    $this->name=$value;
                    $this->area=$value->ancho*$value->largo;                
                }else{
                    echo "error instanceof";
                    exit;
                }
                
            }elseif ($name=="ciudad" && is_string($value)) {
                $this->name=$value;
            }elseif ( $name=="calle" && is_string($value)) {
                $this->name=$value;
            }else{
                echo "error __set";
                exit;
            }

            
        }

        public function getDimensiones(){
            return $this->dimensiones;
        }

        public function getArea(){
            return $this->area;
        }

        public function __toString()
        {
            return "<p>Ciudad: ". $this->ciudad."<br></p><p>Calle: ". $this->calle."<br></p><p>Plantas: ". $this->plantas ."<br></p><p>Dimensiones: (". $this->dimensiones .")<br></p>";
        }

        public function __clone()
        {
            $copiaDimension = clone $this->dimensiones;
        }
    }
?>