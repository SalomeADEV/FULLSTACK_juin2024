<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAO</title>
</head>
<body>


    <?php
       
    require_once("header.php");
    require_once("BD");

    function getPlats(){
    function getCategoriesActive(){
    function getCommande(){ 
    function getMail(){     

    //Script plats
    $servername = 'localhost';
    $dbname = 'the_District';
    $username = 'admin';
    $password = 'Afpa1234';

         

try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // configurer le mode d'erreur PDO pour générer des exceptions
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connecté avec succès à la base de données";
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
    
    $stmt = $conn->query("SELECT * FROM plat;");
        while ($row = $stmt->fetch()) {
        echo $row['id'] . "<br";
        echo $row['libelle'] . "<br>";
        echo $row['categorie'] . "<br";
        echo $row['prix'] . "<br>";
    }

}

    //script categories

    $servername = 'localhost';
    $dbname = 'the_District';
    $username = 'admin';
    $password = 'Afpa1234';
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // configurer le mode d'erreur PDO pour générer des exceptions
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connecté avec succès à la base de données";
    }
    
     catch(PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
     }
    
    if($_SERVER['REQUEST_METHOD'] == 'GET' &&  isset($_GET['id']) )
        $stmt = $conn->query("SELECT * FROM plat WHERE id_categorie=" . $_GET['id'] .";");
        $i=0;
        while ($row = $stmt->fetch()){
    
            
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
            </div>';
            if($i==6){
                break;
            }
            $i++;
        }
        }
            


    //Script commande

    $servername = 'localhost';
    $dbname = 'the_District';
    $username = 'admin';
    $password = 'Afpa1234';

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
}
    
    
    //Script mail

    function getMail2($mail){

if ($mail){
    try {
        $mail->send();
        echo 'Email envoyé avec succès';
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
    }
    
}
    }}

   
    
?>




