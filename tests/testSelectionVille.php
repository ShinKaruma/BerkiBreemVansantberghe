<?php

include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();

var_dump($lePdo);

$sortie = selectionVilles($lePdo);

var_dump($sortie);
