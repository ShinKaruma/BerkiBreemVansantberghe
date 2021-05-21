<?php
session_start();
if (isset($_SESSION['droits']) == null) {
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <title>Affichage Recherche</title>
    </head>
    <body>
        <form action="creationPageChangeMDP.php" method="post">
            <label for="login">Adresse Mail :</label><br>
            <input type="text" required="required" id="mail" name="mail"><br><br>
            <input type="submit" value="Commencer le Changement" name="submit">
        </form>
    </body>
</html>