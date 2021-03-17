<?php
//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

//var_dump permet d'afficher le contenu d'un objet. Utilisable uniquement lors de test de validation
var_dump($lePdo);

//on entre en dur les valeurs7
$login = "agent2";
$passe = "agent2";

$test = ajouterUser($lePdo, $login, $passe);

var_dump($test);