<!DOCTYPE html>
<html lang="fr">
<head>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>The District_Formulaire</title>
    
</head>
<Body>

<?php
require_once('../header.php')
?>

<form action="NouveauForm.php" method="post">
        <fieldset>
          <legend>Coordonnées</legend>
          <label for="nom">Nom:</label><input type="text" name="Nom" id="?"><br>
          <label for="nom">Prénom:</label><input type="text" name="Prenom" id="?"><br>
          <label for="adresse">Adresse:</label><input type="text" name="Adresse" id="?"><br>
          <label for="telephone">Téléphone:</label><input type="number" name="Number" id="?"><br>
          <label for="?">Email:</label><input type="email" name="Email"><br>  
          <label for="demande">Demande:</label><textarea cols="500" rows="4" name="demande" id="Demande"></textarea><br>  
          <p>Tous les champs sont obligatoires</p>
              
        


          <div class="row g-3 align-items-center">
          <div class="col-auto">
          <label for="inputPassword6" class="col-form-label">Password</label>
          </div>

          <div class="col-auto">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"><br>
          </div><br>


          <div>
          <input type="submit" value="Commander"><br/>
          </div>
        </fieldset>
</form>









<?php
require_once('../footer.php')
?>

<body>
html