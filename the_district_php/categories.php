<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>The District categories </title>
</head>

<body>


  <!-- ici mon header -->

  <?php
  require_once('header.php')
  ?>

    <!-------catégories_plats-->


    
        <div class="container">



        <?php


$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "the_district";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
}

 catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
 }
     $stmt = $conn->query("SELECT * FROM categorie;");
    while ($row = $stmt->fetch()) {

      echo '<div class="col-md-4">
      <div class="card mb-3 mx-5 col-md-6" style="max-width: 540px;">
      <a href="categoriedetail.php?id=' . $row['id'] .'">  <img src="'. $row['image'].'" assets class="img-fluid rounded-start" 
      alt="'. $row['libelle'] .'"></a>
        <div class="card-body">
          <h5 class="card-title">'. $row['libelle'] .'</h5>
         
        </div>
      </div>
    </div>';
        /*echo $row['id'] . "<br";
        echo $row['libelle'] . "<br>";
        echo $row['image'] . "<br";
        echo $row['active'] . "<br>";*/

    }
    
?>
       
        </div>

    
  <?php
  require_once("footer.php");
  ?>


  <!-- script bootstrap et JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <!-- <script src="assets/js/script.js"></script> -->



</body>

</html>
