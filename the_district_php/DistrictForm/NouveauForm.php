<!-- <!DOCTYPE html>
<html lang="en">
<head>
<body>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="DistrictForm.php">
        <title>Nouveau_Formulaire</title> -->
    
<?php 
$infoscommande = "\nom et prenom :".$_REQUEST['Nom'].",".$_REQUEST['Prenom'].", email :".$_REQUEST['Email'].", telephone :".$_REQUEST['Number'].", adresse du client :".$_REQUEST['Demande'].", date et heure de la commande :".date("d/m/Y H-i-s");
$titre = date("Y-m-d-H-i-s");
     // Ouverture en écriture seule 
     $fp = fopen($titre.".txt", "a"); 
     
     // Ecriture du contenu
     fputs($fp, $infoscommande); 
     
     // Fermeture du fichier  
     fclose($fp);

     header("Location:Districtform.php")


?>

<!-- </body>
</html> -->