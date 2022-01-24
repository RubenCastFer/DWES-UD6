<?php
    // require './models/librosModel.php';
    // $libros=getLibros();
    // include './views/librosView.php';

    function listar(){
        require './models/librosModel.php';
        $libros=getLibros();
        include './views/librosView.php';

    }

    function libroConcreto(){
        require './models/librosModel.php';
        $libros=getLibroConcreto($_GET['num']);
        var_dump($libros);
        include './views/librosView.php';
    }
?>