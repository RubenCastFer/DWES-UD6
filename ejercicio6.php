<?php

use ICampeonato as GlobalICampeonato;
use IEquipoFutbol as GlobalIEquipoFutbol;

interface ICampeonato{
        public function getCampeonato();
    }
    interface IEquipoFutbol{
        public function getNumeroJugadores();
        public function juegaPartido();
    }

    class EquipoFutbol implements IEquipoFutbol,ICampeonato{
        private int $jugadores;
        private string $nombreEquipo;
        private string $nombreCampeonato;

        public function __construct($jugadores, $nombreEquipo, $nombreCampeonato)
        {
            $this->jugadores=$jugadores;
            $this->nombreEquipo=$nombreEquipo;
            $this->nombreCampeonato=$nombreCampeonato;
        }
        
        public function getNumeroJugadores(){
            return $this->jugadores;
        }
        public function juegaPartido(){
            return $this->nombreEquipo." VICTORIA";
        }
        public function getCampeonato(){
            return $this->nombreCampeonato;
        }

    }
    
    $nuevoEquipo=new EquipoFutbol(16,"asdf","jklñ");
    // echo $nuevoEquipo->getNumeroJugadores();
    // echo $nuevoEquipo->juegaPartido();
    // echo $nuevoEquipo->getCampeonato();
    var_dump( $nuevoEquipo instanceof ICampeonato);
    var_dump( $nuevoEquipo instanceof IEquipoFutbol);
    
?>