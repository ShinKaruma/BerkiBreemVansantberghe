<?php

function connexionBDD() {
    $bdd = 'mysql:host=localhost;dbname=site_immo';
    $user = 'AP2Mission3';
    $password = 'master';
    
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
    $monObjPdoStatement = $objConnexion->prepare("select passe from utilisateur where login = :login");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    
    var_dump($bvc1);
    
    $tab = $monObjPdoStatement->execute();
    $test = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();
   
    
    if(sizeof($test)==0){
        return null;        
    }
    else{
        return $test[0]['passe'];
    }

}


function ajouterUser($objConnexion, $login, $passe){
    $passe_hash =  password_hash($passe, PASSWORD_DEFAULT);
    $monObjPdoStatement = $objConnexion->prepare("insert into utilisateur(login,passe) values(:login,:passe)");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    $bvc2 = $monObjPdoStatement->bindValue(':passe',$passe_hash);
    
    var_dump($bvc1);
    var_dump($bvc2);

    
    $tab = $monObjPdoStatement->execute();
    $monObjPdoStatement->closeCursor();
    
    return $tab;
}
?>