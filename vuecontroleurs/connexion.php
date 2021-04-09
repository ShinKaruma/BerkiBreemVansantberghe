<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <form action="../vuecontroleurs/connexionEtRedirection.php" method="POST">
            <label for="login">Login:</label><br>
            <input type="text" id="login" name="login"><br>
            <label for="passe">Passe:</label><br>
            <input type="password" id="passe" name="passe">
            <input type="submit" value="Submit">

        </form>


    </body>
</html>
