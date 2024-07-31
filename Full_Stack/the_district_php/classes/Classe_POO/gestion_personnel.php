<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_personnel</title>
</head>
<body>
    

<?php


require_once('Primeclass.php');
require_once('Employeclass.php');


$ma_prime = new Primes();
$ma_prime->setSalaire(32);

$nb_annee = 0;
$salaire_annuel = 50000;
//calcul du salaire annuel
//salaire mensuel * 12{
echo $ma_prime->getSalaire_annuel($salaire_annuel);


//prime = salaire annuel * (5% + 2% (par année d'ancienneté))

/*********************************************************************
créer une date $maintenant pour aujourd'hui (NOW) 
calculer $maintenant - $_Date_embauche (on récupère juste le nombre d'années)
on calcule le pourcentage de prime (5% + 2% (par année d'ancienneté)
la prime sera égale au salaire annuel * le poucentage
 *********************************************************************/
/* Bonne chance Chantal !!!! */


    // date de versement de la prime : 30/11

    //ecrire l'ordre de transfert à la banque/afficher montant
    //afficher le montant des primes 

    //vérifier la date de versement des primes: utiliser une fonction,
        //afficher ordre de transfert si dejà effectué sinon = faux
        // afficher si empoye a des enfants
        // afficher si employe a droit à 1-3 cheques de Noel

   

    //$date=date_create("now",timezone_open("Europe/Paris"));
    //echo date_format($date,"Y/m/d");
    
   
   $magasin2 = new $magasin2 ('Typo','Rue de Choisy', '75013', 'Paris', 'Région Ile-de-France'); 
   $p = new $Personnage2();
   $p->setNom("Dupont");
   $p->setPrenom("Martin");
   $p->setMagasin("Magasin2");

   echo $p->getNom(). '<br>';
   echo $p->getPrenom(). '<br>';
   echo $p->getMagasin()->getNom(). '<br>';
   echo $p->getMagasin()->getAdresse(). '<br>';
   echo $p->getMagasin()->getCodepostal(). '<br>';
   echo $p->getMagasin()->getVille(). '<br>';
   echo $p->getMagasin()->getRégion(). '<br>';

    //

   $magasin3 = new $magasin3 ('Beauté', 'rue de Lille', '59200', 'Tourcoing', 'Région Nord' );
   $p = new $Personnage3();
   $p->setNom("Ali");
   $p->setPrenom("Yanis");
   $p->setMagasin("Magasin3");


   echo $p->getNom(). '<br>';
   echo $p->getPrenom(). '<br>';
   echo $p->getMagasin()->getNom(). '<br>';
   echo $p->getMagasin()->getAdresse(). '<br>';
   echo $p->getMagasin()->getCodepostal(). '<br>';
   echo $p->getMagasin()->getVille(). '<br>';
   echo $p->getMagasin()->getRégion(). '<br>';

 
    //


   $magasin4 = new $magasin4 ('Porte', 'Bd Tartanpion', '67000', 'Strasbourg', 'Région Grand-Est' );
   $p = new $Personnage4();
   $p->setNom("MacGuyer");
   $p->setPrenom("Patrick");
   $p->setMagasin("Magasin4");


   echo $p->getNom(). '<br>';
   echo $p->getPrenom(). '<br>';
   echo $p->getMagasin()->getNom(). '<br>';
   echo $p->getMagasin()->getAdresse(). '<br>';
   echo $p->getMagasin()->getCodepostal(). '<br>';
   echo $p->getMagasin()->getVille(). '<br>';
   echo $p->getMagasin()->getRégion(). '<br>';

    //

   $magasin5= new $magasin5 ('Ecueil', 'Bd du Port', '13000', 'Marseille', 'Région Sud' );
   $p = new $Personnage5();
   $p->setNom("Jarditou");
   $p->setPrenom("Hadrien");
   $p->setMagasin("Magasin5");


   echo $p->getNom(). '<br>';
   echo $p->getPrenom(). '<br>';
   echo $p->getMagasin()->getNom(). '<br>';
   echo $p->getMagasin()->getAdresse(). '<br>';
   echo $p->getMagasin()->getCodepostal(). '<br>';
   echo $p->getMagasin()->getVille(). '<br>';
   echo $p->getMagasin()->getRégion(). '<br>';


    //
 
$magasin6 = new $magasin6('Spartes', 'Avenue du Gal de Gaulle', '69000', 'Lyon', 'Région Auvergne-Rhône_Alpes' );
   $p = new $Personnage6();
   $p->setNom("Antier");
   $p->setPrenom("Hélène");
   $p->setMagasin("Magasin6");


   echo $p->getNom(). '<br>';
   echo $p->getPrenom(). '<br>';
   echo $p->getMagasin()->getNom(). '<br>';
   echo $p->getMagasin()->getAdresse(). '<br>';
   echo $p->getMagasin()->getCodepostal(). '<br>';
   echo $p->getMagasin()->getVille(). '<br>';
   echo $p->getMagasin()->getRégion(). '<br>';




   
    ?>

        //<label for="start">Start date:</label>
        //<input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31" />

    </body>
    </html>