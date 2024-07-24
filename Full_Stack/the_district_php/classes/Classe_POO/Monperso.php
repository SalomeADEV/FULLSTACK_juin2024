<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once('Personnageclass.php');
require_once('Magasinsclass.php');
$magasin1 = new Magasins('brico','Amiens','80000','rue plouf');

$p = new Personnage();
$p->setNom("Lebowski");
$p->setPrenom("Jeff");
$p->setMagasin($magasin1);

echo $p->getNom().'<br>';
echo $p->getPrenom().'<br>';
echo $p->getMagasin()->getNom().'<br>';
echo $p->getMagasin()->getVille().'<br>';
echo $p->getMagasin()->getCodepostal().'<br>';
echo $p->getMagasin()->getAdresse().'<br>';


// $date=date_create("2024-07-16",timezone_open("Europe/Paris"));
// echo date_format($date,"Y/m/d H:iP");

?>
    
</body>
</html>