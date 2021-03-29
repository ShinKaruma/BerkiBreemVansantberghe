<?php

include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();

var_dump($lePdo);

$statement = "Select * From bien";

$resultat = getResult($lePdo, $statement);

var_dump($resultat);