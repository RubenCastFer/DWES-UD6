<?php
    class Local{
        private string $ciudad;
        private string $calle;
        private int $plantas;
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

            switch ($name) {
                case 'ciudad':
                    if (is_string($value)) {
                    $this->$name=$value;
                    }
                    break;
                case 'calle':
                    if ( $name=="calle" && is_string($value)) {
                    $this->$name=$value;
                    }
                    break;
                case 'plantas':
                    if ($value > 0 && $value <11 && is_int($value)) {
                        $this->$name=$value;
                    }
                    break;
                case 'dimensiones':
                    if ($value instanceof Dimensiones) {
                        $this->$name=$value;
                    }else{
                        echo "error instanceof";
                        die();
                    }
                    break;
                default:
                    # code...
                    break;
            }

            
        }

        public function __get($name)
        {
            return $this->$name;
        }
        public function getDimensiones(){
            return $this->dimensiones;
        }

        public function __toString()
        {
            return "<p>Ciudad: ".$this->ciudad."<br></p><p>Calle: ".$this->calle."<br></p><p>Plantas: ".$this->plantas."<br></p><p>Dimensiones: (".$this->dimensiones.")<br></p>";
        }

        public function __clone()
        {
            $this->dimensiones = clone $this->getDimensiones();
        }
    }
?>