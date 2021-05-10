<<<<<<< Updated upstream
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

function droitsUser($objConnexion, $login){
    $monObjPdoStatement = $objConnexion->prepare("select droits from utilisateur where login = :login");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    
    $tab = $monObjPdoStatement->execute();
    $droit = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();
    
    var_dump($droit);
    return $droit[0]['droits'];
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

function getResult ($objConnexion, $statement){
    $monObjPdoStatement = $objConnexion->prepare($statement);
    
    $executionOk = $monObjPdoStatement->execute();
    $result = $monObjPdoStatement->fetchAll();
    
    $monObjPdoStatement-> closeCursor();
    return $result;
}

function afficherAppart1(){
    
    $lePdo = connexionBDD();

    var_dump($lePdo);

    $statement = "Select * From bien where IDb = 1";

    $resultat = getResult($lePdo, $statement);

    print_r($resultat);
}

=======
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

function droitsUser($objConnexion, $login) {
    $monObjPdoStatement = $objConnexion->prepare("select droits from utilisateur where login = :login");
    $bvc1 = $monObjPdoStatement->bindValue(':login', $login);
    var_dump($monObjPdoStatement);

    $tab = $monObjPdoStatement->execute();
    $droit = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();

    var_dump($droit);
    return $droit[0]['droits'];
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

function ajoutBien($objConnexion, $IDb, $Type, $Prix, $Ville, $Adresse) {
    $monObjPdoStatement = $objConnexion->prepare('INSERT INTO `bien` (`IDb`, `Type`, `Prix`, `Ville`, `Adresse`)');
    $monObjPdoStatement->execute(array(
        'IDb' => $IDb,
        'Type' => $Type,
        'Prix' => $Prix,
        'Ville' => $Ville,
        'Adresse' => $Adresse,
    ));

    echo 'Le bien a été ajouté !';
}

function ajoutImage($objConnexion, $IDb, $lien){
    $monObjPdoStatement = $objConnexion->prepare('INSERT INTO `images` (`IdB`, `Images`)');
    $monObjPdoStatement->execute(array(
        'IdB' => $IdB,
        'Images' => $Images,
    ));
}

function getResult($objConnexion, $choice) {
    $monObjPdoStatement = $objConnexion->prepare("Select * From bien where idB = $choice");
    
    $executionOk = $monObjPdoStatement->execute();
    $result = $monObjPdoStatement->fetchAll();

    $monObjPdoStatement->closeCursor();
    return $result;
}

function getImage($objConnexion, $choice) {
    
    $monObjPdoStatement = $objConnexion->prepare("Select Images From images where idB = $choice");
    
    $executionOk = $monObjPdoStatement->execute();
    $result = $monObjPdoStatement->fetchAll();

    $monObjPdoStatement->closeCursor();
    
    return $result;
}
    

function modificationBien($IDb, $type, $desc, $jardin, $taille, $NbPiece, $Prix, $Ville, $Adresse) {
    $req = $bdd->prepare('UPDATE `bien` (`IDb`, `Type`, `Desc`, `Jardin`, `Taille`, `NbPiece`, `Prix`, `Ville`, `Adresse`)');
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

    echo 'Le bien a été modifié !';
}



function triBiens($objConnexion, $type, $jardin, $taille, $NbPiece, $PrixMini, $PrixMax, $Ville) {
    $requete = "select Description, Jardin, Taille, NbPiece, Prix, Ville, Adresse from bien where ";
    
    if ($type != null) {
        $requete = $requete . "Type = :type";
        $monObjPdoStatement = $objConnexion->prepare($requete);
        $bvc1 = $monObjPdoStatement->bindValue(':type', $type);
        var_dump($bvc1);
    }

    if ($jardin != null) {
        $requete = $requete . " and Jardin = :jardin";
        $monObjPdoStatement = $objConnexion->prepare($requete);
        $bvc2 = $monObjPdoStatement->bindValue(':jardin', $jardin);
        var_dump($bvc2);
    }

    if ($taille != null) {
        $requete = $requete . " and Taille = :taille";
        $monObjPdoStatement = $objConnexion->prepare($requete);
        $bvc3 = $monObjPdoStatement->bindValue(':taille', $taille);
        var_dump($bvc3);
    }

    if ($NbPiece != null) {
        $requete = $requete . " and NbPiece = :nbPiece";
        $monObjPdoStatement = $objConnexion->prepare($requete);
        $bvc4 = $monObjPdoStatement->bindValue(':nbPiece', $NbPiece);
        var_dump($bvc4);
    }

    if ($PrixMini != null) {
        $requete = $requete . " and Prix >= :prixMini";
        $monObjPdoStatement = $objConnexion->prepare($requete);
        $bvc5 = $monObjPdoStatement->bindValue(':prixMini', $PrixMini);
        var_dump($bvc5);
    }

    if ($PrixMax != null) {
        $requete = $requete . " and Prix <= :prixMax";
        $monObjPdoStatement = $objConnexion->prepare($requete);
        $bvc6 = $monObjPdoStatement->bindValue(':prixMax', $PrixMax);
        var_dump($bvc6);
    }

    if ($Ville != null) {
        $requete = $requete . " and Ville = :ville";
        $monObjPdoStatement = $objConnexion->prepare($requete);
        $bvc7 = $monObjPdoStatement->bindValue(':ville', $Ville);
        var_dump($bvc7);
    }
    
    var_dump($requete);
    var_dump($monObjPdoStatement);
    $executionOk = $monObjPdoStatement->execute();
    $result = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement->closeCursor();
    var_dump($executionOk);
    var_dump($result);    
}

>>>>>>> Stashed changes
?>