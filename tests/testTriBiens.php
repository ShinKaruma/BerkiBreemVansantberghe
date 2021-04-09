<?php

include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();
        
$type = 1;
$jardin = "oui";
$taille = null;
$NbPiece = null;
$PrixMini = null;
$PrixMax = null;
$Ville = null;

triBiens($lePdo, $type, $jardin, $taille, $NbPiece, $PrixMini, $PrixMax, $Ville);