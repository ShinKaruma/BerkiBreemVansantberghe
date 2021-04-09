<?php
include_once '../modeles/mesFonctionsAccesAuxDonnees.php';


//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();
var_dump($lePdo);


//cas de test correct
$login = "agent1";
$passe = "agent1";

$conn = connexionUser($lePdo, $login, $passe);
var_dump($conn);

if($conn){
    echo 'Connexion réussie';    
}
else{
    echo 'Erreur: mot de passe ou login incorrect';
}

//cas de test un incorrect
$login = "agent2";
$passe = "agent1";

$conn = connexionUser($lePdo, $login, $passe);
var_dump($conn);

if($conn){
    echo 'Connexion réussie';    
}
else{
    echo 'Erreur: mot de passe ou login incorrect';
}

//cas de test tout incorrect
$login = "agent8";
$passe = "jhgt";

$conn = connexionUser($lePdo, $login, $passe);
var_dump($conn);

if($conn){
    echo 'Connexion réussie';    
}
else{
    echo 'Erreur: mot de passe ou login incorrect';
}

