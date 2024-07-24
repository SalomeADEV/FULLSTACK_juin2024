<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POOTEST</title>
</head>
<body>
    
<?php 
 class Animal 
 {
     public $espece;
     private $taille;
     private $poids;
     private $nbpattes;
 
     public function manger() {
         // ...
     }
 
     public function avancer(int $nbpas) {
         // ...
     }
 }
 
?>

<?php 
class Vehicule{

    public $_marque;
    public $_vitesseMax;
    protected $_vitesseCourante;
    private $_nbPassagers;

    public function demarrer() {
        // code permettant de démarrer l'objet instancié
    }
    public function accelerer(int $nbKm) {
        // code permettant d'accélérer
    }
    public function avancer(int $nbKm) {
        // code permettant d'avancer
    }
    public function ajouterPassager() {
        // code permettant d'ajouter un passager 
    }
}


?>



</body>
</html>