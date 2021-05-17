<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <title>Recherche de Biens</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['droits']) == false) {
            include '../inc/menuClient.inc';
        } else
        if ($_SESSION['droits'] == '1') {
            include '../inc/menuAgent.inc';
        }

        include_once '../modeles/mesFonctionsAccesAuxDonnees.php';

        $lePdo = connexionBDD();
        $sortie = selectionVilles($lePdo);
        ?>

        <form action="#" method="POST">
            <label for ="bien">Type du bien</label>
            <select id="bien" name="bien">
                <option value="1">Maison</option>
                <option value="2">Appartement</option>
                <option value="3">Immeuble</option>
                <option value="4">Terrains nus</option>
                <option value="5">Commerces</option>
            </select>
            <label for ="bien">Jardin</label>
            <select id="jardin" name="jardin">
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>

            <label for ="ville">Ville du bien</label>
            <select id="ville" name = "ville">
                <?php
                for ($i = 0, $size = count($sortie); $i < $size; $i++) {
                    echo '<option value=$sortie[$i]>$sortie[i]</option>';
                }
                ?>
            </select>


        </form>


    </body>
</html>
