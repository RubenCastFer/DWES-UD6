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

    function obtenerElemento($id){
        try {
            $conexion = crearConexion();
            $consulta =$conexion->prepare("SELECT * FROM juegos WHERE id=:id"); 
            $consulta->bindParam(":id",$id);
            $consulta->execute();
            $conexion = null;
            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    function eliminarElemento($id){
        try {
            $conexion = crearConexion();            $consulta =$conexion->prepare("DELETE FROM juegos WHERE id=:id"); 
            $parametros = array(":id"=>$id);
            $resultado = $consulta->execute($parametros);
            $conexion = null;
            return $resultado;

        } catch (PDOException $e) {
            return false;
        }
    }

    function editarElemento($id,$titulo,$director,$desarrolladora,$precio,$nota,$lanzamiento,$imagen){
        try {
            $conexion = crearConexion();            $consulta =$conexion->prepare("UPDATE juegos SET Titulo=:titulo, Director=:director, Desarrolladora=:desarrolladora, Precio=:precio, Nota=:nota, Lanzamiento=:lanzamiento, Imagen=:imagen WHERE id=:id"); 
            $parametros = array(":titulo"=>$titulo, ":director"=>$director, ":desarrolladora"=>$desarrolladora, ":precio"=>$precio, ":nota"=>$nota, ":lanzamiento"=>$lanzamiento, ":imagen"=>$imagen, ":id"=>$id);
            $resultado=$consulta->execute($parametros);
            $conexion = null;
            return $resultado;
            
        } catch (PDOException $e) {
            return false;
        }
    }

    function obtenerTodos(){
        try {
            $conexion = crearConexion();
            $consulta =$conexion->prepare("SELECT `id`, `Titulo`, `Director`, `Precio`, `Lanzamiento` FROM `juegos`"); 
            $consulta->execute(); 
            $array = [];
            while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
                $array[]=$fila;
            }
            $conexion = null;
            return $array;
            
        } catch (PDOException $e) {
            return false;
        }
    }

    function insertaElemento($titulo,$director,$desarrolladora,$precio,$nota,$lanzamiento,$imagen){
        try {
            $conexion = crearConexion();            $consulta =$conexion->prepare("INSERT INTO juegos (Titulo, Director, Desarrolladora, Precio, Nota, Lanzamiento, Imagen) VALUES (:titulo, :director, :desarrolladora, :precio, :nota, :lanzamiento, :imagen)"); 
            $parametros = array(":titulo"=>$titulo, ":director"=>$director, ":desarrolladora"=>$desarrolladora, ":precio"=>$precio, ":nota"=>$nota, ":lanzamiento"=>$lanzamiento, ":imagen"=>$imagen);
            $consulta->execute($parametros);
            $resultado=$conexion->lastInsertId();
            $conexion = null;
            return $resultado;
    
        } catch (PDOException $e) {
            return false;
        }
    }

   
?>