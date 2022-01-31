<?php
function crearConexion(){
    $servidor="localhost";
    $baseDatos="videojuegos"; 
    $usuario= "developer";
    $pass="developer";
    try {
        return new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
    } catch (PDOException $e) {
        return false;
    }
}

function comprobarContrasenay($usuario){

    try {
        $conexion = crearConexion();
        $consulta = $conexion->prepare("SELECT `id`, `contrasenya` FROM `usuarios` WHERE `nombre` LIKE :usuario");
        $parametros = array(":usuario" => $usuario);
        $consulta->execute($parametros);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    } catch (PDOException $e) {
        return false;
    }
    }
    
    function personaTipo($id){
    
    try {
        $conexion = crearConexion();
        $consulta = $conexion->prepare("SELECT tipo FROM `usuarios` WHERE `id` = :id");
        $parametros = array(":id" => $id);
        $consulta->execute($parametros);
        $resultado = $consulta->fetch();
        $conexion = null;
        return $resultado;
    } catch (PDOException $e) {
        return false;
    }
    }
    
?>

