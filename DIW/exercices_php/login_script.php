<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $user = [];
     $user['nom'] = $_REQUEST['nom']; 
     $user['email'] = $_REQUEST['user_email'];
     $user['motdepasse'] = $_REQUEST['mot_de_passe'];
    $password_hash = password_hash("vacances", PASSWORD_DEFAULT);
    if($_REQUEST['user_email']=='email@gmail.com' && password_verify($user['motdepasse'], $password_hash)){
        echo 'mot de passe et email correct';
    } else {
        echo 'mot de passe ou email incorrect';
    }
    ?>

    <?php 
 var_dump($user);
 echo $password_hash; 
    ?>
</body>
</html>