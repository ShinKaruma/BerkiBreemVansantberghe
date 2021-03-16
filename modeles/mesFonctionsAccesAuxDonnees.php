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
    $test = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();
    
    return $test[0][0];
}


function ajouterUser($objConnexion, $login, $passe){
    $passe_hash =  password_hash($passe, PASSWORD_DEFAULT);
    $monObjPdoStatement = $objConnexion->prepare("insert into utilisateur(login,passe) values(:login,:passe)");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    $bvc2 = $monObjPdoStatement->bindValue(':passe',$passe_hash);
    
    var_dump($bvc1);
    var_dump($bvc2);
    
    echo $passe_hash;
    
    $tab = $monObjPdoStatement->execute();
    $monObjPdoStatement->closeCursor();
    
    return $tab;
}
?>