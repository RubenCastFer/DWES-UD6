<?php
    // require './models/librosModel.php';
    // $libros=getLibros();
    // include './views/librosView.php';

    //http://localhost/DWES/EJERCICIO_DE_CLASE/DWES-UD6/ejercicio11/index.php?controller=libros&action=listar
    function listar(){
        require './models/librosModel.php';
        $libros=getLibros();
        include './views/librosView.php';

    }
//http://localhost/DWES/EJERCICIO_DE_CLASE/DWES-UD6/ejercicio11/index.php?controller=libros&action=mostraLibro&num=2
    function mostraLibro(){
        require './models/librosModel.php';
        $libros=getLibroConcreto($_GET['num']);
        include './views/librosView.php';

    }
?>