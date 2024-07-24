<?php

class Magasins
{
    private $_nom;
    private $_ville;
    private $_code_postal;
    private $_adresse;
    private $_restauration;

    public function __construct($nom, $ville, $code_postal, $adresse) {
        $this->_nom = $nom ;
        $this->_ville = $ville;
        $this->_code_postal = $code_postal;
        $this->_adresse = $adresse;
        $this->_restauration = restauration;
}

public function getNom(){
    return $this->_nom;
}
public function getVille(){
    return $this->_ville;
}
public function getCodepostal(){
    return $this->_code_postal;
}
public function getAdresse(){
    return $this->_adresse;
}



}


// 1 magasin = 1 nom
//             1 adresse
//             code postal
//             ville   
// classe Employe est rattachée à la classe Magasin


?>


