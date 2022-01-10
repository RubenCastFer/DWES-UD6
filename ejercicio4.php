<?php
    class Vivienda{
        private string $tipoVivienda;
        private float $valorMercado;

        public function __construct($tipoVivienda, $valorMercado){
            $this->tipoVivienda=$tipoVivienda;
            $this->valorMercado=$valorMercado;
        }

        public function __get($name)
        {
            return $this->$name;
        }

        public function __set($name, $value)
        {
            switch ($name) {
                case 'tipoVivienda':
                    $this->tipoVivienda=$value;
                    break;
                case "valorMercado":
                    if ($value>0) {
                        $this->valorMercado=$value;
                    }else{
                        echo "el valor no puede ser menor a 0";
                    }
                    break;

            }
        }
    }

    $miCasa = new Vivienda("casa", 2000);
    echo $miCasa->tipoVivienda;
    echo $miCasa->valorMercado;
    $miCasa->tipoVivienda="piso";
    echo $miCasa->tipoVivienda;
    $miCasa->valorMercado=-110;
    echo $miCasa->valorMercado;
    
    
?>

