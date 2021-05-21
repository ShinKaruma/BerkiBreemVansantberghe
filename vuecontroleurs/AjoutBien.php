<?php session_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajout Bien</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <form enctype="multipart/form-data" action="action_ajout.php" method="post">
            <label for="login">Référence :</label><br>
            <input type="number" required="required" maxlength="11" id="ref" name="ref"><br><br>
            <label for="login">Ville :</label><br>
            <input type="text" required="required" maxlength="15" id="ville" name="ville"><br><br>
            <label for="login">Adresse :</label><br>
            <input type="text" required="required" maxlength="30" id="adresse" name="adresse"><br><br>
            <label for="bien">Type de bien :</label><br>
            <select id="type" required="required" name="type">
              <option value="1">Maison</option>
              <option value="2">Appartement</option>
              <option value="3">Immeuble</option>
              <option value="4">Terrain nu</option>
              <option value="5">Commerce</option>
            </select><br><br>
            <label for="bien">Jardin :</label><br>
            <select id="jardin" required="required" name="jardin">
              <option value="oui">Oui</option>
              <option value="non">Non</option>
            </select><br><br>
            <label for="login">Prix :</label><br>
            <input type="number" required="required" maxlength="11" id="prix" name="prix"><br><br>
            <label for="login">Surface :</label><br>
            <input type="text" required="required" maxlength="5" id="surface" name="surface"><br><br>
            <label for="login">Nombre de pieces :</label><br>
            <input type="number" required="required" maxlength="11" id="pieces" name="pieces"><br><br>
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
            </form>
    </body>
</html>