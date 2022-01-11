<?php
    abstract class FiguraGeometrica{
        private string $color;
        private string $tipo;

        public function __construct($color, $tipo)
        {
            $this->color=$color;
            $this->tipo=$tipo;
        }

        abstract function Dibuja();
        abstract function Area();
    }

    class Cuadrado extends FiguraGeometrica{

        private float $base;


        public function __construct($color, $tipo, $base)
        {
            $this->color=$color;
            $this->tipo=$tipo;

            $this->base=$base;
        }
        
        public function Dibuja(){
            return $this->color.$this->tipo;
        }
        public function Area(){
            return pow($this->base,2);
        }
    }

    class Triangulo extends FiguraGeometrica{
        
        private float $altura;
        private float $base;


        public function __construct($color, $tipo, $altura, $base)
        {
            $this->color=$color;
            $this->tipo=$tipo;
            $this->altura=$altura;
            $this->base=$base;
        }

        public function Dibuja(){
            return $this->color.$this->tipo;
        }
        public function Area(){
            return ($this->base*$this->altura/2);
        }
    }

    class Circulo extends FiguraGeometrica{
        
        private float $radio;


        public function __construct($color, $tipo, $radio)
        {
            $this->color=$color;
            $this->tipo=$tipo;
            $this->radio=$radio;
        }
        
        public function Dibuja(){
            return $this->color.$this->tipo;
        }
        public function Area(){
            return(pi()*(pow($this->radio,2)));
        }
    }

    $cuadrado = new Cuadrado("rojo","cuadrado",3);
    $triangulo = new Triangulo("azul","triangulo",3,6);
    $circulo = new Circulo("verde","circulo",4);

    echo $cuadrado->Area();
    echo "<br>";
    echo $cuadrado->Dibuja();
    echo "<br>";
    
    echo $triangulo->Area();
    echo "<br>";
    echo $triangulo->Dibuja();
    echo "<br>";

    echo $circulo->Area();
    echo "<br>";
    echo $circulo->Dibuja();
?>