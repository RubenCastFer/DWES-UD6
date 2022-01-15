<?php
    class Coche extends CuatroRuedas{
        private int $numeroCadenasNieve;

        public function __construct($color,$peso,$numeroPuertas,$numeroCadenasNieve){
            parent::__construct($color,$peso,$numeroPuertas);
            $this->numeroCadenasNieve=$numeroCadenasNieve;
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

        public function añadirCadenasNieve($num){
            $this->numeroCadenasNieve=$this->numeroCadenasNieve+$num;
        }

        public function quitarCadenasNieve($num){
            $this->numeroCadenasNieve=$this->numeroCadenasNieve-$num;            
        }

        static function verAtributo($obj){
            foreach ($obj as $key => $value) {
                echo $key.": ".$value;
                echo "<br>";
            }        
            parent::verAtributo($obj);
        }

        public function añadir_persona($pesoPersona){
            parent::añadir_persona($pesoPersona);
            if ($this->peso>=1500 && $this->numeroCadenasNieve<=2) {
                echo "Atencion, ponga 4 cadenas para la nieve.";
            }
        }
    }
?>