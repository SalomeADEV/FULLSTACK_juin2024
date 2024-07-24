<?php

class Primes
{

    private $_Nom;
    private $_Prenom;
    private $date_embauche;
    private $_Salaire;
    private $montant_prime;
    private $anciennete;

    public function setSalaire($salaire)
    {
        $this->_Salaire = $salaire;
    }

    public function setDate_embauche($ma_date)
    {
        $this->date_embauche = $ma_date;
    }

    public function getSalaire_annuel()
    {
        return $this->_Salaire * 12;
    }





    public function getAnciennete()
    {

        /*
        $date_embauche = strtotime('2001-09-11 09:30:00');
        $this->date_embauche = DateTime::createFromFormat('d/m/Y', $date_embauche);
        $date = new DateTime();
        $date->format('d/m/Y');
        $this->anciennete = date_diffAnnees($this->date_embauche,$date('now'));
        $this->anciennete = $this->anciennete->format('%xannee, %m, %d');
*/
    }

    public function setMontant_prime($montant_prime)
    {
        $this->montant_prime = $montant_prime;
    }

    public function getMontant_prime()
    {

        /*
            $calcul_prime(annuel)= $date(now)- $date_embauche('%5')
            $calcul_prime(anciennete) = date_diffAnnees * 0.02;
            echo date_versement(prime);
            echo virement->$_toBanque('30/11/Y')
            */

        return $this->montant_prime;
    }
}
