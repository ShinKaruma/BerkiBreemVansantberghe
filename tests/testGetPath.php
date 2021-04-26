<?php

        include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

        $lePdo = connexionBDD();
        $choice = htmlspecialchars ($_POST['bien']);

        $result = getImage($lePdo, $choice);

        $image1link = $result[0]["Images"];
        $image2link = $result[1]["Images"];
        
        echo $image1link;
        
?>