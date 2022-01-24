<?php
    function getConnection(){
        $user='developer';
        $password = 'developer';
        return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
    }
    
    function getPeriodicos(){
        $db=getConnection();
        $result = $db->query('SELECT Nombre, Fecha FROM periodicos');
        $periodicos=array();
        while ($periodico=$result->fetch()){
            $periodicos[]=$periodico;
        }
        return $periodicos;
                
    }
     
    function getPeriodicoConcreto($num){
        $db=getConnection();
        $result = $db->prepare('SELECT Nombre, Fecha FROM periodicos WHERE id=:id');
        $result->bindParam(":id",$num);
        $result->execute();
        while ($periodico=$result->fetch()){
            $periodicos[]=$periodico;
        }
        return $periodicos;
    }
?>