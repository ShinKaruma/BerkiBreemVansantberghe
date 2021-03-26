<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>info Appart1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include_once '../modeles/mesFonctionsAccesAuxDonnees.php';
        
            $lePdo = connexionBDD();

            var_dump($lePdo);

            $statement = "Select * From bien";

            $resultat = getResult($lePdo, $statement);
            echo "Id du bien :";
            echo($resultat[0]["IDb"]);
            echo nl2br("\n") ;
            echo "Id de Type bien :";
            echo($resultat[0]["Type"]);
            echo nl2br("\n") ;
            echo "Description du bien :";
            echo($resultat[0]["Desc"]);
            echo nl2br("\n") ;
            echo "Y a t il un jardin :";
            echo($resultat[0]["Jardin"]);
            echo nl2br("\n") ;
            echo "Combiens y a t il de pieces :";
            echo($resultat[0]["NbPiece"]);
            echo nl2br("\n") ;
            echo "Prix du bien :";
            echo($resultat[0]["Prix"]);
            echo nl2br("\n") ;
            echo "Ville ou se situe le bien :";
            echo($resultat[0]["Ville"]);
            echo nl2br("\n") ;
            echo "Adresse du bien :";
            echo($resultat[0]["Adresse"]);
        ?>
    </body>
</html>
