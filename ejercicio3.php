<?php

use Persona as GlobalPersona;

class Persona{
        private $nombre;
        private $dni;
        private $sexo;
        private $peso;
        private $altura;

        public function __construct($nombre, $dni, $sexo, $peso, $altura){
            $this->nombre=$nombre;
            $this->dni=$dni;
            $this->sexo=$sexo;
            $this->peso=$peso;
            $this->altura=$altura;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function setDNI($dni){
            $this->dni=$dni;
        }

        public function setSexo($sexo){
            $this->sexo=$sexo;
        }

        public function setPeso($peso){
            $this->peso=$peso;
        }

        public function setAltura($altura){
            $this->altura=$altura;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getDNI(){
            return $this->dni;
        }
        
        public function getSexo(){
            return $this->sexo;
        }
        
        public function getPeso(){
            return $this->peso;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function mostrar(){
            return $this->nombre.$this->dni.$this->sexo.$this->peso.$this->altura;
        }
        
        public function __toString(){
            return $this->nombre.$this->dni.$this->sexo.$this->peso.$this->altura;
        }
    }

    class Trabajador extends GlobalPersona{
        private $nombreEmpresa;

        public function __construct($nombre, $dni, $sexo, $peso, $altura,$nombreEmpresa){
            parent::__construct($nombre, $dni, $sexo, $peso, $altura);
            $this->nombreEmpresa=$nombreEmpresa;
        }

        public function setNombreEmpresa($nombreEmpresa){
            $this->nombreEmpresa=$nombreEmpresa;
        }

        public function getNombreEmpresa(){
            return $this->nombreEmpresa;
        }

        public function mostrar(){
            return $this->nombreEmpresa;
        }

        public function mostrarTodo(){
            return parent::mostrar().$this->nombreEmpresa;
        }

        public function __toString(){
            return parent::__toString().$this->nombreEmpresa;
        }

    }
    $persona1 = new Persona("ruben","48963910s","hombre",100,184);
    $trabajador = new Trabajador("ruben","48963910s","hombre",100,184,"ies poligono sur");
    echo $trabajador;
    $persona1->setNombre("ana");
    $persona1->setDNI("32037256g");
    $persona1->setSexo("mujer");
    $persona1->setPeso(64);
    $persona1->setAltura(168);
    echo "<br>";    
    echo $persona1;
?>