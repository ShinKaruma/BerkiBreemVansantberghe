<?php
session_start();
if (isset($_SESSION['droits']) == false) {
    $_SESSION['droits'] = null;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title>Acceuil</title>
    </head>
    <body>
        <?php
        if ($_SESSION['droits'] == null) {
            include 'inc/menuClient.inc';
        } 
        else
           if ($_SESSION['droits'] == '1') {
            include 'inc/menuAgent.inc';
        }
            // put your code here
        ?>
        <br>
        <form method="post" id="leForm" action="vuecontroleurs/AffichageBiens.php">
        
            <label for="bien">Choisissez un bien :</label>
            <select id="bien" name="bien">
              <option value="1">Appart 1</option>
              <option value="2">Maison 1</option>
              <option value="3">Maison 2</option>
              <option value="4">Maison 3</option>
              <option value="5">Maison 4</option>
              <option value="6">Maison 5</option>
              <option value="7">Appart 2</option>
              <option value="8">Appart 3</option>
              <option value="9">Appart 4</option>
              <option value="10">Appart 5</option>
              <option value="11">Appart 6</option>
              <option value="12">Appart 7</option>
              <option value="13">Immeuble 1</option>
              <option value="14">Immeuble 2</option>
            </select>
            <br>
            <br>
            <input type="submit" class="btnValider" name="submit" value="Afficher">
        
        </form>
    </body>
    <script>
        let monForm = document.getElementById('leForm');
        monForm.addEventListener('submit', function(e));
    </script>
</html>