<?php

class Employe {

    private $nom;
    private $tel;
    private $compte_bancaire;
    protected $niv_admin;
    public $pointure_de_chaussure;


    public function __construct($compte_bancaire, $niv_admin = "user")
    {
        $this->compte_bancaire = $compte_bancaire;
        $this->niv_admin = $niv_admin;
    }

    protected function calcul_indemnite () {
        return 2 + 2 ;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        if ($nom != ""){
        $this->nom = strval($nom);}
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getNivAdmin()
    {
        return $this->niv_admin;
    }

}

class SuperEscroc extends Employe {

}

$_Chantal = new Employe(12345,"admin");
$_Chantal->setNom(3.8);
$_Chantal->setNom("escargot");
//$_Chantal->nom = "plouf";
$_Chantal->setNom("plouf");
$_Chantal->setNom(True);
echo $_Chantal->$niv_admin;
//$_Chantal->tel = 0601010101;

echo $_Chantal->getNom();