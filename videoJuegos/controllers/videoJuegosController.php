<?php
//http://localhost/DWES/EJERCICIO_DE_CLASE/DWES-UD6/videoJuegos/index.php?controller=videoJuegos&action=listar
function listar()
{
    require './models/videoJuegosModel.php';
    $juegos = obtenerTodos();
    include './views/videoJuegosListaView.php';
}

function juegoConcreto()
{
    require './models/videoJuegosModel.php';

    $juego = obtenerElemento($_GET['varId']);
    include './views/videoJuegoConcretoView.php';
}

function mostraForm()
{
    require './models/videoJuegosModel.php';

    $errorImagen = "";
    $errorEditar = "";

    if (empty($_GET["varId"])) {
        $resultado["id"] = "";
        $resultado["Titulo"] = "";
        $resultado["Director"] = "";
        $resultado["Desarrolladora"] = "";
        $resultado["Precio"] = "";
        $resultado["Nota"] = "";
        $resultado["Lanzamiento"] = "";
        $resultado["Imagen"] = "";
    } else {
        $id = $_GET["varId"];
        $resultado = obtenerElemento($id);
    }       
    include './views/editView.php';
}
function cribar(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["id"])) {
            crear();
        }else{
            modificar();
        }
    }
}

function modificar(){
    require './models/videoJuegosModel.php';
    $imagen = "";
    $error = true;
    $errorEditar = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $id = $_POST["id"];
        $resultado = obtenerElemento($id);
        
       

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (empty($_FILES["avatar"]["name"])) {
            
            $uploadOk = 0;
            $imagen = $resultado["Imagen"];
            
        } else {
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if ($check !== false) {

                $uploadOk = 1;
            } else {
                $errorImagen = "El archivo no es una imagen";
                $uploadOk = 0;
            }
            if (file_exists($target_file)) {
                $errorImagen = "El archivo ya existe";
                $uploadOk = 0;
                $imagen = $resultado["Imagen"];
            }
            if ($imageFileType != "png" && $imageFileType != "jpeg") {
                $errorImagen = "Solo formato .png o jpeg";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                $errorImagen = "La imagen no se pudo guardar";
                $error = false;
            } else {
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    $imagen = $_FILES["avatar"]["name"];
                } else {
                    $errorImagen = "No se pudo guardar la imagen.";
                    $error = false;
                }
            }
        }


        $titulo = $_POST["titulo"];
        $titulo = strip_tags($titulo);
        $titulo = stripslashes($titulo);
        $titulo = htmlspecialchars($titulo);

        $director = $_POST["director"];
        $director = strip_tags($director);
        $director = stripslashes($director);
        $director = htmlspecialchars($director);

        $desarrolladora = $_POST["desarrolladora"];
        $desarrolladora = strip_tags($desarrolladora);
        $desarrolladora = stripslashes($desarrolladora);
        $desarrolladora = htmlspecialchars($desarrolladora);

        $precio = $_POST["precio"];

        $nota = $_POST["nota"];

        $lanzamiento = $_POST["lanzamiento"];

        $editado = editarElemento($id, $titulo, $director, $desarrolladora, $precio, $nota, $lanzamiento, $imagen);
        if ($editado && $error) {
            $errorEditar="Todo bien edit";
            header("Location: index.php?controller=videoJuegos&action=juegoConcreto&varId=$id");
        } else {
            $errorEditar = "Se produjo un error editar";
        }
        
    }
    include './views/editView.php';
}

function crear(){
    require './models/videoJuegosModel.php';
    $imagen = "";
    $error = true;
    $errorEditar = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id="";
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (empty($_FILES["avatar"]["name"])) {
            $uploadOk = 0;
            $errorImagen = "La imagen no se ha añadido";
            
        } else {
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if ($check !== false) {

                $uploadOk = 1;
            } else {
                $errorImagen = "El archivo no es una imagen";
                $uploadOk = 0;
            }
            if (file_exists($target_file)) {
                $errorImagen = "El archivo ya existe";
                $uploadOk = 0;
                $imagen = $resultado["Imagen"];
            }
            if ($imageFileType != "png" && $imageFileType != "jpeg") {
                $errorImagen = "Solo formato .png o jpeg";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                $errorImagen = "La imagen no se pudo guardar";
                $error = false;
            } else {
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    $imagen = $_FILES["avatar"]["name"];
                } else {
                    $errorImagen = "No se pudo guardar la imagen.";
                    $error = false;
                }
            }
        }


        $titulo = $_POST["titulo"];
        $titulo = strip_tags($titulo);
        $titulo = stripslashes($titulo);
        $titulo = htmlspecialchars($titulo);

        $director = $_POST["director"];
        $director = strip_tags($director);
        $director = stripslashes($director);
        $director = htmlspecialchars($director);

        $desarrolladora = $_POST["desarrolladora"];
        $desarrolladora = strip_tags($desarrolladora);
        $desarrolladora = stripslashes($desarrolladora);
        $desarrolladora = htmlspecialchars($desarrolladora);

        $precio = $_POST["precio"];

        $nota = $_POST["nota"];

        $lanzamiento = $_POST["lanzamiento"];

        $resultado = insertaElemento($titulo, $director, $desarrolladora, $precio, $nota, $lanzamiento, $imagen);
        if ($resultado > 0) {
            $errorEditar="Todo bien";
            header("Location: index.php?controller=videoJuegos&action=listar");
        }else{
            $errorEditar = "Se produjo un error";
        }
        
    }
    include './views/editView.php';
}