<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
    </head>
    <body>
        <?php
        include_once '../inc/menuAgent.inc';
        ?>

        <form action="../vuecontroleurs/connexionEtRedirection.php" method="POST">
            <label for="login">Login:</label><br>
            <input type="text" id="login" name="login"><br>
            <label for="passe">Passe:</label><br>
            <input type="text" id="passe" name="passe">
            <input type="submit" value="Submit">

        </form>


    </body>
</html>
