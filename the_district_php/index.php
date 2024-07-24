<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>

<!-- ici mon header -->

//Présentation des 6 catégories de plats

<?php
require_once('header.php')
?>
 <!-- ici les catégories 1, 2, 3-->

<div class="container">
  <h2>Mes catégories</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">

    <div class="col-md-4">
      <div class="card ">
        <a href="Platparcatégorie/platparcatégorie.html"><img class=" card-img-top imganime" src="assets/img/category/sandwich_cat.jpg" 
          alt="sandwich">  </a>
        <div class="card-body">
          <h5 class="card-title">SANDWICH</h5>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card ">
        <img class="imganime card-img-top" src="assets/img/category/veggie_cat.jpg"  alt="veggie">
        <div class="card-body">
          <h5 class="card-title">VEGGIE</h5>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card ">
        <img class="imganime card-img-top" src="assets/img/category/salade_cat.jpg" alt="salade">
        <div class="card-body">
          <h5 class="card-title">SALADE</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- ici les catégories 4, 5, 6-->
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">

    <div class="col-md-4">
      <div class="card">
        <img src="assets/img/category/asian_food_cat.jpg" class="imganime card-img-top" alt="Plat Sushi">
        <div class="card-body">
          <h5 class="card-title">Plat asiatique</h5>
        </div>
      </div>
    </div>
  
                  
    <div class="col-md-4">
      <div class="card ">
        <img src="assets/img/burger.jpg" class="card-img-top" alt="Burger">
        <div class="card-body">     
          <h5 class="card-title">Burger</h5>
        </div>
      </div>
    </div>
        
    <div class="col-md-4">
      <div class="card">
        <img src="assets/img/category/pasta_cat.jpg" class="card-img-top" alt="Pâtes">
        <div class="card-body">
          <h5 class="card-title">Pasta</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Mes plats</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">

    <div class="col-md-4">
      <div class="card ">
        <img src="assets/img/food/lasagnes_viande.jpg" class="card-img-top" alt="Lasagnes">
        <div class="card-body">
          <h5 class="card-title">lasagnes_viande</h5> 
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card ">
        <img src="assets/img/food/Food-Name-3461.jpg" class="card-img-top" alt="Viande enroulée dans la crêpe">
        <div class="card-body">
          <h5 class="card-title">Wrap</h5>
        </div>
      </div>  
    </div>

    <div class="col-md-4">
      <div class="card ">
        <img src="assets/img/food/salad1.png" class="card-img-top" alt="salade1">
        <div class="card-body">
          <h5 class="card-title">salade1</h5>
        </div>
      </div>  
    </div>

  </div>
      
    




<!-- ici mon footer -->
<?php

require_once('footer.php')

?>

<!-- script bootstrap et JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
   
    
      <!-- <script src="assets/js/script.js"></script> -->
        



</body>
</html>