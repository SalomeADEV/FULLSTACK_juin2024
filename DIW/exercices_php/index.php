<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <!-- Formulaire de saisie -->

    <form action="index.php" method="post">
        <label for="Nom">Nom : </label>
        <input type="text" name="Nom" size="10" maxlength="20" /><br />
        <label for="Prenom">Prénom : </label>
        <input type="text" name="Prenom" size="10" maxlength="20" /><br />
        <input type="submit" value="ENVOYER" />
    </form>





<h2><?php if (isset($_POST['Nom']) && ($_POST['Nom'] != 'plouf')) {

    echo $_POST['Nom'];

}?></h2>

<h2><?php if (isset($_POST['Prenom']) && ($_POST['Prenom'] != 'plouf')) {

echo $_POST['Prenom'];

}?></h2>

    <!-- on affiche les données récupérées dans des labels -->

    <!-- label Nom <php If j'ai un nom en mémoire je l'écris dans mon label > -->
    <!-- label Prénom <php If j'ai un prénom en mémoire je l'écris dans mon label > -->


    
 <!-- <form action="script.php" method="post"> 
      Nom : <input type="text" name="nom" size="20" maxlength="40" /> <br /> 
      Prenom : <input type="text" name="prenom" size="20" maxlength=40 /> 
      <input type="submit" value="ENVOYER" /> 
    </form> 
    <br>
    

---------->

Formulaire d'authentification

<form action="login_script.php" method="post">
  <ul>
    <li>
      <label for="mail">E-mail&nbsp;:</label>
      <input type="email" id="mail" name="user_email" />
    </li>
    <li>
      <label for="password">Mot de passe</label><br>
      <input type="text" id="mot de pass" name="mot_de_passe"/>
      
    …
  </ul>
</form>
...


</body>

</html>