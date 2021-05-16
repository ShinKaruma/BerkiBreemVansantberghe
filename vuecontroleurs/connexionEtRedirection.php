<?php
session_start();
include_once '../modeles/mesFonctionsAccesAuxDonnees.php';


$lePdo = connexionBDD();

$login = $_POST['login'];
$passe = $_POST['passe'];

$connexion = connexionUser($lePdo, $login, $passe);

if($connexion){
    $_SESSION['droits'] = droitsUser($lePdo, $login);
    var_dump($_SESSION['droits']);
    header('Location: ../index.php');
}
else{
    echo '<p style="color:#cc0000;"> Erreur de connexion, le login ou le mot de passe est incorrect</p>';
    sleep(15);
    header('Location: connexion.php');
}