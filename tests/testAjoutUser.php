<?php

//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

//var_dump permet d'afficher le contenu d'un objet. Utilisable uniquement lors de test de validation
var_dump($lePdo);

//on entre en dur les valeurs7
$login = "test";
$passe = "test";

$check = checkUser($lePdo, $login);

if ($check == 1) {
    echo "le login est déjà utilisé";
} else {
    if (strlen($login) > 20) {
        echo strlen($login);
        echo "\nerreur, login trop long";
    } else {
        $test = ajouterUser($lePdo, $login, $passe);

        var_dump($test);
    }
}