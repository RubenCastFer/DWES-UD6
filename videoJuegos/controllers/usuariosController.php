<?php
function login()
{
    require './models/usuariosModel.php';
    session_start();
    //    session_destroy();
    $error = "";
    if (empty($_SESSION["tipo"])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST["usuario"];
            $usuario = strip_tags($usuario);
            $usuario = stripslashes($usuario);
            $usuario = htmlspecialchars($usuario);

            $contrasenya = $_POST["pass"];
            $contrasenya = strip_tags($contrasenya);
            $contrasenya = stripslashes($contrasenya);
            $contrasenya = htmlspecialchars($contrasenya);

            $personaIdContrasenya = comprobarContrasenay($usuario);
            var_dump($personaIdContrasenya);
            if ($personaIdContrasenya == false) {
                echo "usuario incorrecto";
            } else {
                var_dump(password_verify($contrasenya, $personaIdContrasenya["contrasenya"]));
                if (password_verify($contrasenya, $personaIdContrasenya["contrasenya"])) {
                    //echo "usuario y contraseña correctas";
                    $id = $personaIdContrasenya["id"];
                    $_SESSION["id"] = $id;
                    $tipo = personaTipo($id);
                    var_dump($tipo);
                    if (!empty($tipo)) {
                        $_SESSION["tipo"] = $tipo["tipo"];
                    }

                    //echo $_SESSION["tipo"];
                    //echo $_SESSION["tipo"]." ".$_SESSION["id"];
                    header("Location: index.php?controller=videoJuegos&action=listar");
                } else {

                    $error = "usuario y contraseña incorrectas";
                    //echo $_SESSION["tipo"]." ".$_SESSION["id"];
                }
            }
        }
    } else if (!empty($_SESSION["tipo"]) && $_SESSION["tipo"] == "admin") {
        header("Location: index.php?controller=videoJuegos&action=listar");
    } else{
        session_destroy();
    }
    include "./views/loginView.php";
}

function cerrarSesion(){
    session_start();
    session_destroy();
    header("Location: index.php?controller=usuarios&action=login");
    
}
?>