<?php

function connexionBDD() {
    $bdd = 'mysql:host=192.168.56.4;dbname=site_immo';
    $user = 'master';
    $password = 'master';
    
    try {

        $ObjConnexion = new PDO($bdd, $user, $password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
    } catch (PDOException $e) {
        
        echo $e->getMessage();
        
    }
    
    return $ObjConnexion;
    
}

?>