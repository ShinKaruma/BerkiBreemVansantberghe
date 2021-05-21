<?php

include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

$lePdo = connexionBDD();

$randlink = randomlink();

$lien = "/PagesRecuperation/" . $randlink . ".php";

$myfile = fopen(".." . $lien, "w") or die("Unable to open file!");

$txt = "<!DOCTYPE html> \n"
        . " <html> \n"
        . "     <head> \n"
        . "         <meta charset='UTF-8'> \n"
        . "         <link href='../css/style.css' rel='stylesheet' type='text/css' /> \n"
        . "         <title>Affichage Recherche</title> \n"
        . "     </head> \n"
        . "     <body> \n"
        . "         <form action='../vuecontroleurs/ChangementMDP.php' method='post'> \n"
        . "             <label for='login'>Identifiant (login) :</label><br> \n"
        . "             <input type='text' required='required' maxlength='20' id='login' name='login'><br><br>      \n"
        . "             <label for='mdp'>nouveau mot de passe :</label><br> \n"
        . "             <input type='text' required='required' maxlength='20' id='mdp' name='mdp'><br><br>      \n"
        . "             <input type='submit' value='Changer de mot de passe' name='submit'> \n"
        . "        </form> \n"
        . "     </body> \n"
        . " </html>";
fwrite($myfile, $txt);

$liencomplet = "http://localhost/BerkiBreemVansantberghe" . $lien ;

print($liencomplet);

#ini_set("SMTP","smtp.gmail.com");
#ini_set("smtp_port","25");
#ini_set('sendmail_from', 'sendmail500@gmail.com');

#mail ( $_POST['mail'] , "Changement de mot de Passe" ,$liencomplet);