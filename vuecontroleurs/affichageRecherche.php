<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <title>Affichage Recherche</title>
    </head>
    <body>        
        <?php
        if ($_SESSION['droits'] == null) {
            include '../inc/menuClient.inc';
        } 
        else
           if ($_SESSION['droits'] == '1') {
            include '../inc/menuAgent.inc';
        }
        
        include_once '../modeles/mesFonctionsAccesAuxDonnees.php';
        $lePdo = connexionBDD();
        
        $type = $_POST['type'];
        $jardin = $_POST['jardin'];
        $taille = $_POST['taille'];
        $NbPiece = $_POST['nbPiece'];
        $PrixMini = $_POST['prixMin'];
        $PrixMax = $_POST['prixMax'];
        $Ville = $_POST['Ville'];
        var_dump($taille);
        $biens = triBiens($lePdo, $type, $jardin, $taille, $NbPiece, $PrixMini, $PrixMax, $Ville);
        var_dump($biens);
        ?>
        
        
        
    </body>
</html>
