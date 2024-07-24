<?php
class Personnage{

    private $_Nom;
    private $_Prenom;
    private $_date_embauche;
    private $_Poste;
    private $_Salaire;
    private $_Secteur;
    private $_magasin;
    
    public function setNom($nom){
        $this->_Nom = $nom;
    }

    public function setPrenom($prenom){
        $this->_Prenom = $prenom;
    }


    public function getNom(){
        return $this->_Nom;
    }

    public function getPrenom(){
        return $this->_Prenom;
    }

    public function setDate_embauche($date_embauche){
        $this->_date_embauche = $date_embauche;

    }
     public function getDate_embauche(){
        return $this->_date_embauche;
     }

    public function setPoste($poste){
        $this->_Poste = $poste;
    }
    public function getPoste(){
        return $this->_Poste;
    }

    public function setSalaire($salaire){
        $this->_Salaire = $salaire;
    }

    public function getSalaire(){
        return $this->_Salaire;
    }
    public function setSecteur($Secteur){
        $this->_Secteur = $Secteur;
    }
    public function getSecteur(){
        return $this->_Secteur;
    }

    public function setMagasin($magasin){
        $this->_magasin = $magasin;
    }

    public function getMagasin(){
       return $this->_magasin;
    }



}

?>





