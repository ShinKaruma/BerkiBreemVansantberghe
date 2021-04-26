<?php

include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();

$choice = htmlspecialchars ($_POST['bien']);
var_dump($lePdo);

var_dump($choice);

$resultat = getResult($lePdo, $choice);

var_dump($resultat);
