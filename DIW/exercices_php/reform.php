

<?php 

echo "Tu surfes sur le web en semaine plutôt le : "; 

// Lecture du tableau 
foreach (($_REQUEST["jours"]) as $jour)      
{ 
    echo " $Jour - "; 
} 

// autre test
?>
<form action="page.php" method="post">
    Votre e-mail:<input type="text" name="email" />
    <input type="hidden" Name="secret" value="texte à passer discrètement" />
    <input type="submit" value="OK" />
</form><br>


<form action ="check.php" method="post"> 
    Tu utilises internet plutôt le :<br /> 
    <input type="checkbox" name="jours[]" value="Lundi" />Lundi<br />
    <input type="checkbox" name="jours[]" value="Mardi" />Mardi<br />
    <input type="checkbox" name="jours[]" value="Mercredi" />Mercredi<br />
    <input type="checkbox" name="jours[]" value="Jeudi" />Jeudi<br />
    <input type="checkbox" name="jours[]" value="Vendredi" />Vendredi<br />
    <input type="submit" name="Envoyer" value="ENVOYER" /> 
</form> 


<form action="<?php print $_SERVER["PHP_SELF"] ?>"method="post">
  <input type="text" name="zoneDeTexte" size="40" maxlength="40">
  <input type="submit" name="btnEnvoyer" value="envoyer">
</form><br>



    <input type="submit" name="delete" value="Supprimer">
    <input type="submit" name="create" value="Créer">
    <input type="submit" name="update" value="Modifier">
<br>
<?php
  if ( isset( $_POST['update'])) { // mise à jour
        echo "mise a jour";
    } elseif ( isset($_POST['delete'])) {
        echo "suppression";
    } elseif ( isset($_POST['create'])) {
        echo "Création";
    }
?>
<br>

<form action="monscript.php"<?php print $_SERVER["PHP_SELF"];?> method="post">
    <input type="text" name="zoneDeTexte" size="40" maxlength="40">
    <input type="submit" name="btnEnvoyer" value="envoyer">

</form><br>


$_REQUEST["nom_du_input"]
