<?php
session_start();
if (isset($_SESSION['droits']) == false) {
    $_SESSION['droits'] = null;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceuil</title>
    </head>
    <body>
        <?php
        var_dump($_SESSION['droits']);


        if ($_SESSION['droits'] == null) {
            echo 2;
        } 
        else
           if ($_SESSION['droits'] == '1') {
            include 'inc/menuAgent.inc';
        }
        ?>
        <a href="vuecontroleurs/connexion.php"> Connexion </a>
        <br>
        <br>
        <a class="Affichage" type="button" value="Affichage" href='vuecontroleurs/affichageBiens.php'"'>Afficher info appart1</a>
    </body>
</html>