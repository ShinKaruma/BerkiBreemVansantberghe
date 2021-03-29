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
<<<<<<< Updated upstream
        var_dump($_SESSION['droits']);


        if ($_SESSION['droits'] == null) {
            echo 2;
        } 
        else
           if ($_SESSION['droits'] == '1') {
            include 'inc/menuAgent.inc';
        }
=======
            // put your code here
>>>>>>> Stashed changes
        ?>
        <a href="vuecontroleurs/connexion.php"> Connexion </a>
        <br>
        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <br>
        <a class="Affichage" type="button" value="Affichage" href='vuecontroleurs/affichageBiens.php'"'>Afficher info Bien</a>
    </body>
</html>