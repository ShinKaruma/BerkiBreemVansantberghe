<?php

function connexionBDD() {
    $bdd = 'mysql:host=localhost;dbname=site_immo';
    $user = 'root';
    $password = 'root';
    
    try {

        $ObjConnexion = new PDO($bdd, $user, $password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
    } catch (PDOException $e) {
        
        echo $e->getMessage();
        
    }
    
    return $ObjConnexion;
    
}



function deconnexionBDD($cnx) {
    $cnx = null;
}

function connexionUser($objConnexion, $login, $passe) {
    $monObjPdoStatement = $objConnexion->prepare("select count(*) from utilisateur where login = :login and passe = :passe");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    $bvc2 = $monObjPdoStatement->bindValue(':passe', $passe);
    
    var_dump($bvc1);
    var_dump($bvc2);
    
    $tab = $monObjPdoStatement->execute();
    $monObjPdoStatement->closeCursor();
    
    return $tab;
}
?>