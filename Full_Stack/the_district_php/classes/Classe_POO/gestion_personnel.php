<?php
require_once('Primeclass.php');


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

    //}
    // Noms de 5 objets_employés pour tester le fonctionnement du virement:

    // - Martin Dupont
    // - Yanis Ali
    // - Patrick MacGuyer
    // - Hadrien Jarditou
    // - Hélène Antier
    

   
    $date=date_create("now",timezone_open("Europe/Paris"));
    echo date_format($date,"Y/m/d");
    
    
    ?>



    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <?php echo ($salaire_annuel); ?>


        //<label for="start">Start date:</label>
        //<input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31" />

    </body>
    </html>