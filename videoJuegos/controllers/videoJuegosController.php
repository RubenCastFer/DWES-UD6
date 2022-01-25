<?php
//http://localhost/DWES/EJERCICIO_DE_CLASE/DWES-UD6/videoJuegos/index.php?controller=videoJuegos&action=listar
    function listar(){
        require './models/videoJuegosModel.php';
        $juegos=obtenerTodos();
        include './views/videoJuegosListaView.php';

    }

    function juegoConcreto(){
        require_once './models/videoJuegosModel.php';

        $juego=obtenerElemento($_GET['varId']);
        include './views/videoJuegoConcretoView.php';
    }
?>