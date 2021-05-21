<!DOCTYPE html> 
 <html> 
     <head> 
         <meta charset='UTF-8'> 
         <link href='../css/style.css' rel='stylesheet' type='text/css' /> 
         <title>Affichage Recherche</title> 
     </head> 
     <body> 
         <form action='../vuecontroleurs/ChangementMDP.php' method='post'> 
             <label for='login'>Identifiant (login) :</label><br> 
             <input type='text' required='required' maxlength='20' id='login' name='login'><br><br>      
             <label for='mdp'>nouveau mot de passe :</label><br> 
             <input type='text' required='required' maxlength='20' id='mdp' name='mdp'><br><br>      
             <input type='submit' value='Changer de mot de passe' name='submit'> 
        </form> 
     </body> 
 </html>