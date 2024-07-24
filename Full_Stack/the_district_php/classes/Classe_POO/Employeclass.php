
<?php
class employe{

    private $nom;
    private $prenom;
    private $date_embauche;
    private $magasin;
    private $enfants;
    private $cheque;
    

    public function __construct($nom, $prenom, $date_embauche) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_embauche = $date_embauche;
    }
    
     public function setDate_embauche($Date_embauche){
    
     $this->date_embauche = $Date_embauche;
    
     }
    
    public function getDate_embauche(){
        return $this->date_embauche;
    }
    
    public function getAnciennete(){
        $datejour = new DateTime();
        $date_embauche = new DateTime($this->date_embauche);
        $interval = $date_embauche->diff($datejour);
        return $interval->format('%R%a days');
    }

    public function getPrime(){
        // a implémenter
        return 50000;
    }

    public function setMagasin($magasin){
        $this->magasin = $magasin;
    }

    public function getMagasin(){
       return $this->magasin;
              
    }
    
    public function setEnfants($montant_cheque){

       $this->enfants = $montant_cheque;
  
    }

    public function getCheque(){

        return $this-> cheque;
    }
}


//tel employe a tant d'enfants,
//tel employe a droit à 1 ou 2 ou 3 
//cheques de Noel

//exemple création employé
$datejour = new DateTime();
$employe = new employe("Dupont","Emilie",$datejour);



 ?>


