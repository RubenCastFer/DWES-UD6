<?php
    abstract class Vehiculo implements IVehiculo{
        private string $color;
        private float $peso;
        protected static int $numeroCambioColor = 0;

        public function __construct($color, $peso){
            $this->color=$color;
            $this->peso=$peso;
        }
             
        public function __set($name, $value){
            switch ($name) {
                case 'color':
                    $this->setColor($value);
                    break;
                case 'peso':
                    $this->setPeso($value);
                    break;
                default:
                    $this->$name=$value;
                    break;
            }
        }

        public function setColor($color){
            $this->color = $color;
            self::$numeroCambioColor += 1;
        }

        public function setPeso($peso){
            if ($peso<=2100) {
                $this->peso=$peso;  
            }else{
                echo "No se pueden añadir mas personas <br>";
            }
        }
        
        public function __get($name){
            return $this->$name;
        }

        public function circula(){
            echo "El vehículo está circulando";
        }

        abstract function añadirPersona($pesoPersona);

        public static function verAtributo($obj){
            echo "Color: " . $obj->color . "<br>";
            echo "Peso: " . $obj->peso . "<br>";
            echo "Cambios de color: " . self::$numeroCambioColor . "<br>";
    
            if (get_class($obj) == "CuatroRuedas" || get_class($obj) == "Coche" || get_class($obj) == "Camion") {
                echo "Número de puertas: " . $obj->numeroPuertas . "<br>";
            }
    
            if (get_class($obj) == "Coche") {
                echo "Número de cadenas de: " . $obj->numeroCadenasNieve . "<br>";
            }
    
            if (get_class($obj) == "DosRuedas") {
                echo "Cilindrada: " . $obj->cilindrada . "<br>";
            }
    
            if (get_class($obj) == "Camion") {
                echo "Longitud: " . $obj->longitud . "<br>";
            }
        }
    }

?>