<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories_DB</title>
</head>
<body>




        
<div class ="container">

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
    //echo "Connecté avec succès à la base de données";
}

 catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
 }

if($_SERVER['REQUEST_METHOD'] == 'GET' &&  isset($_GET['id']) ) {
    $stmt = $conn->query("SELECT * FROM plat WHERE id_categorie=" . $_GET['id'] .";");
   
    while ($row = $stmt->fetch()) {

      echo '<div class="col-md-4">
      <div class="card mb-3 mx-5 col-md-6" style="max-width: 540px;">
      <img src="assets/img/food/'. $row['image'] . '" class="img-fluid rounded-start"  
      alt="' . $row['libelle'] . '">
        <div class="card-body">
          <h5 class="card-title">'. $row['libelle'] .'</h5>
          <p> Prix: ' . $row['prix']  . '
          <a href="cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
          </p>
         
        </div>
      </div>
    </div>';}

}
?>
</div>
</body>
</html>







    
</body>
</html>