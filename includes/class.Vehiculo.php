<?php
    abstract class Vehiculo{
        private string $color;
        private float $peso;
        private static int $numeroCambioColor = 0;

        public function __construct($color, $peso){
            $this->color=$color;
            $this->peso=$peso;
        }
             
        public function __set($name, $value){
            switch ($name) {
                case 'color':
                    $this->numeroCambioColor=$this->numeroCambioColor+1;
                    $this->$name=$value;
                    break;
                case 'peso':
                    if ($value<=2100) {
                        $this->$name=$value;
                    }
                    break;
                default:
                    $this->$name=$value;
                    break;
            }
        }

        public function __get($name){
            return $this->$name;
        }

        public function circula(){
            echo "El vehículo está circulando";
        }

        abstract function añadir_persona($pesoPersona);

        static function verAtributo($obj){
            foreach ($obj as $key => $value) {
                echo $key.": ".$value;
                echo "<br>";
            }        
        }
    }

?>