<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Affichage Bien</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        
        <?php
        
        include_once '../modeles/mesFonctionsAccesAuxDonnees.php';
        
            $lePdo = connexionBDD();

            $choice = htmlspecialchars ($_POST['bien']);
            
            $resultat = getResult($lePdo, $choice);
            
            
            $result = getImage($lePdo, $choice);

            $image1link = $result[0]["Images"];
            $image2link = $result[1]["Images"];
        
        ?>
            
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext"> </div>
                <img src="$image1link" style="width:100%">
                <div class="text">1 / 2</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"> </div>
                <img src="$image2link ?" style="width:100%">
                <div class="text">2 / 2</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
        <script type="text/javascript" src="../js/slideshow.js"></script>
        
        Prix : <?php echo $resultat[0]["Prix"] ?>
        <br>
        <br>
        Description : <?php echo $resultat[0]["Desc"] ?>
        <br>
        <br>
        Jardin : <?php echo $resultat[0]["Jardin"] ?>
        <br>
        <br>
        Taille : <?php echo $resultat[0]["Taille"] ?>
        <br>
        <br>
        Nombre de pieces : <?php echo $resultat[0]["NbPiece"] ?>
        <br>
        <br>
        Adresse : <?php echo $resultat[0]["Adresse"] ?>
        <br>
        <br>
        Ville : <?php echo $resultat[0]["Ville"] ?>
        
    </body>
</html>
