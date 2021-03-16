<?php
include_once '../modeles/mesFonctionsAccesAuxDonnees.php';


//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();
var_dump($lePdo);

//$login = $_POST['login'];
//$passe = $_POST['passe'];
//cas de test correct
$login = "agent1";
$passe = "agent1";

$conn = connexionUser($lePdo, $login, $passe);
var_dump($conn);

//cas de test un incorrect
$login = "agent5";
$passe = "agent1";

$conn = connexionUser($lePdo, $login, $passe);
var_dump($conn);

//cas de test tout incorrect
$login = "agent8";
$passe = "jhgt";

$conn = connexionUser($lePdo, $login, $passe);
var_dump($conn);