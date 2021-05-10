<?php

include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();
        
$type = 1;
$jardin = "oui";
$taille = null;
$NbPiece = null;
$PrixMini = 200000;
$PrixMax = 300000;
$Ville = null;

triBiens($lePdo, $type, $jardin, $taille, $NbPiece, $PrixMini, $PrixMax, $Ville);