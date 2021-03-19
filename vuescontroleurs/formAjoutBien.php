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


$req = $bdd->prepare('INSERT INTO `bien` (`IDb`, `Type`, `Desc`, `Jardin`, `Taille`, `NbPiece`, `Prix`, `Ville`, `Adresse`)');
$req->execute(array(
	'IDb' => $IDb,
	'Type' => $Type,
	'Desc' => $Desc,
	'Jardin' => $Jardin,
	'Taille' => $Taille,
	'NbPiece' => $NbPiece
	'Prix' => $Prix
	'Ville' => $Ville
	'Adresse' => $Adresse
	));

echo 'Le bien a été ajouté !';
?>