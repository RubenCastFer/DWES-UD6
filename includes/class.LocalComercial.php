<?php
    class LocalComercial extends Local{

        private string $razonSocial;
        private string $numeroLicencia;

        public function __construct($ciudad,$calle,$plantas,$dimensiones,$razonSocial,$numeroLicencia)
        {
            parent::__construct($ciudad,$calle,$plantas,$dimensiones);
            // $this->ciudad=$ciudad;
            // $this->calle=$calle;
            // $this->plantas=$plantas;
            // $this->dimensiones=$dimensiones;
            $this->razonSocial=$razonSocial;
            $this->numeroLicencia=$numeroLicencia;
        }

        public function __toString()
        {
            return "<p>".parent::__toString()."</p><p>Razón Social: ".$this->razonSocial."<br></p><p>Número de Licencia: ".$this->numeroLicencia."<br></p>";
        }

    }
?>