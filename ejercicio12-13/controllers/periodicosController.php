<?php

//http://localhost/DWES/EJERCICIO_DE_CLASE/DWES-UD6/ejercicio12/index.php?controller=periodicos&action=listar
    function listar(){
        require './models/periodicosModel.php';
        $periodicos=getPeriodicos();
        include './views/periodicosView.php';

    }
//http://localhost/DWES/EJERCICIO_DE_CLASE/DWES-UD6/ejercicio12-13/index.php?controller=periodicos&action=mostraPeriodico&num=3
    function mostraPeriodico(){
        require './models/periodicosModel.php';
        $periodicos=getPeriodicoConcreto($_GET['num']);
        include './views/periodicosView.php';

    }
?>