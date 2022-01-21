<?php
    // require './models/librosModel.php';
    // $libros=getLibros();
    // include './views/librosView.php';

    function listar(){
        require './models/librosModel.php';
        $libros=getLibros();
        include './views/librosView.php';

    }
?>