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


    if (sizeof($test) == 0) {
        return false;
    } else {
        $passe_hash = $test[0]['passe'];
        if (password_verify($passe, $passe_hash)) {
            return true;
        } else {
            return false;
        }
    }
}

function ajouterUser($objConnexion, $login, $passe) {
    $passe_hash = password_hash($passe, PASSWORD_DEFAULT);
    $monObjPdoStatement = $objConnexion->prepare("insert into utilisateur(login,passe) values(:login,:passe)");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    $bvc2 = $monObjPdoStatement->bindValue(':passe', $passe_hash);

    var_dump($bvc1);
    var_dump($bvc2);


    $tab = $monObjPdoStatement->execute();
    $monObjPdoStatement->closeCursor();

    return $tab;
}

function checkUser($objConnexion, $login) {
    $monObjPdoStatement = $objConnexion->prepare("select count(*) from utilisateur where login = :login");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);

    var_dump($bvc1);

    $tab = $monObjPdoStatement->execute();
    $test = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();


    return $test[0]['count(*)'];
}

function ajoutBien($IDb, $type, $desc, $jardin, $taille, $NbPiece, $Prix, $Ville, $Adresse) {
    $req = $bdd->prepare('INSERT INTO `bien` (`IDb`, `Type`, `Desc`, `Jardin`, `Taille`, `NbPiece`, `Prix`, `Ville`, `Adresse`)');
    $req->execute(array(
        'IDb' => $IDb,
        'Type' => $Type,
        'Desc' => $Desc,
        'Jardin' => $Jardin,
        'Taille' => $Taille,
        'NbPiece' => $NbPiece,
        'Prix' => $Prix,
        'Ville' => $Ville,
        'Adresse' => $Adresse,
    ));

    var_dump($bdd);

    echo 'Le bien a été ajouté !';
}

?>