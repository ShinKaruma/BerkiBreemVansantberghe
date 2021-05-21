<?php

include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();

$login = $_POST["login"];

$mdp = $_POST["mdp"];

$changement = changementMDP($lePdo, $login, $mdp);

