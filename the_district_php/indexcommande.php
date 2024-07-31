<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <a link href=" -->
    <title>Creation_DB_the_DistrictSQL</title>
</head>
<body>


//Script_commande   

<?php
require_once("header.php");


$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "the_district";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données<br>";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT * FROM plat WHERE id = :id");
$stmt->bindParam(':id',$_GET['numcommande']);

try {

    $stmt->execute();

} catch (PDOException $e) {

    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
}


$row = $stmt->fetch(); 

    echo $row['libelle'] . "<br>";

    echo $row['description'] . "<br>";

    echo $row['prix'] . "<br>";

    echo '<img src="assets/img/food/'. $row['image'] .'" alt="'.$row['libelle'].'">';

$stmt->closeCursor();


require_once("footer")

?>
</body>
</html>