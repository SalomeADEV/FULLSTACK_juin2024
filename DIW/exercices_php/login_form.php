<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="login_script.php" method="post">
  <ul>
    <li>
      <label for="mail">E-mail&nbsp;:</label>
      <input type="email" id="mail" name="user_email" />
    </li>
    <li>
      <label for="password">Mot de passe</label><br>
      <input type="text" id="mot de pass" name="mot_de_passe"/>
  </ul>
  <button type='submit'>envoyer</button>
</form>
</body>
</html>