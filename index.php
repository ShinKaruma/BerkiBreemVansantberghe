<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceuil</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        if (isset($_SESSION['droits']) == false) {
            include 'inc/menuClient.inc';
        } 
        else
           if ($_SESSION['droits'] == '1') {
            include 'inc/menuAgent.inc';
        }
            // put your code here
        ?>
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