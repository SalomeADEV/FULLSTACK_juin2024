<!DOCTYPE html>
<html lang="en">
 
<body>

 <?php     
   
   if ($a > $b) { 
        echo "$a est plus grand que $b"; 
    } else { 
       echo "$a est moins grand que $b"; 
    } 
    
?>

<?php 
$age=21;
if ($age>=18)
{
   $reponse="majeur" ;
}
else
{
   $reponse=" mineur " ;
}
$message = ($age >= 18) ? "majeur":"mineur";


$age = 25; 

    $reponse = ($age >= 18) ? "majeur" : "mineur"; 

    echo "Vous êtes $reponse ."; 

echo "Vous êtes".($age >=18) ? "majeur":"mineur".".";

?>

<?php
echo "<br>";
$a = 2; 

switch ($a) { 
  case 0 : 
    echo"$a = 0"; 
  break; 

  case 1 : 
    echo "$a = 1"; 
  break; 

  case 2 : 
     echo "$a = 2"; 
  break; 
} 
?>














</body>
</html>