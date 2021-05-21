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

        <form action="affichageRecherche.php" method="POST">
            <label for ="type">Type du bien</label>
            <select id="type" name="type" id="type">
                <option value="1">Maison</option>
                <option value="2">Appartement</option>
                <option value="3">Immeuble</option>
                <option value="4">Terrains nus</option>
                <option value="5">Commerces</option>
            </select>
            <br>
            <label for ="bien">Jardin</label>
            <select id="jardin" name="jardin">
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
            <br>
            <label for ="ville">Ville du bien</label>
            <select id="Ville" name="Ville">
                <option value="null">Peu Importe</option>
                <option value="Paris">Paris</option>
                <option value="Dijon">Dijon</option>
                <option value="Lille">Lille</option>
                <option value="Marseille">Marseille</option>
                <option value="Grenoble">Grenoble</option>
                <option value="roubaix">Roubaix</option>
                <option value="Phalempin">Phalempin</option>
                <option value="nice">Nice</option>
                <option value="bordeaux">Bordeaux</option>
                <option value="la-rochelle">La Rochelle</option>
                <option value="Issou">Issou</option>
                <option value="soupex">Soupex</option>
                <option value="drip">Drip</option>
                <option value="googleton">Googleton</option>
                
            </select>
            <br>
            <input type="number" name="taille">
            <label for="taille">Taille du bien</label>
            <br>
            <input type="number" name="nbPiece" id="nbPiece">
            <label for="nbPiece">Nombre de pièces</label>
            <br>
            <input type="number" name="prixMin" id="prixMin">
            <label for="prixMin">Prix minimum</label>
            <br>
            <input type="number" name="prixMax" id="prixMax">
            <label for="prixMax">Prix maximum</label>
            <br>
            <input type="submit" class="btnValider" name="submit" value="Afficher">
        </form>


    </body>
</html>
