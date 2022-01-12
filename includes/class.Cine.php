<?php
    class Cine extends LocalComercial{
        
        private int $aforoSala;
        
        public function __construct($ciudad,$calle,$plantas,$dimensiones,$razonSocial,$numeroLicencia,$aforoSala)
        {   
            parent::__construct($ciudad,$calle,$plantas,$dimensiones,$razonSocial,$numeroLicencia);
            // $this->ciudad=$ciudad;
            // $this->calle=$calle;
            // $this->plantas=$plantas;
            // $this->dimensiones=$dimensiones;
            // $this->razonSocial=$razonSocial;
            // $this->numeroLicencia=$numeroLicencia;
            if ($aforoSala>0) {
                $this->aforoSala=$aforoSala;
            }else{
                echo "error __construct";
                die();
            }
        }

        public function __toString()
        {
            return "<p>".parent::__toString()."</p><p>Aforo: ".$this->aforoSala."<br></p>";
        }
    }
?>