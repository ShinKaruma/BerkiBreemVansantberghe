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

            <fieldset>
                <label>Jardin</label><br>
                <input type="radio" id="Oui" name="Oui" value="oui">
                <label for="Oui">Oui</label><br>

                <input type="radio" id="Nom" name="Nom" value="non">
                <label for="Non">Non</label><br>

            </fieldset>
        </form>


    </body>
</html>
