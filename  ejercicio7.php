<?php
    abstract class FiguraGeometrica{
        private string $color;

        abstract function Dibuja();
        abstract function Area();
    }

    class Cuadrado extends FiguraGeometrica{
        public function Dibuja(){

        }
        public function Area(){

        }
    }

    class Triangulo extends FiguraGeometrica{
        public function Dibuja(){

        }
        public function Area(){

        }
    }

    class Circulo extends FiguraGeometrica{
        public function Dibuja(){

        }
        public function Area(){
            
        }
    }
?>