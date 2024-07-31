<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


  <title>The District</title>
</head>

<!---------ici mon header----->
<?php

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "the_district";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connecté avec succès à la base de données";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
$stmt = $conn->query("SELECT * FROM plat WHERE active = 'Yes'");
$stmt->execute();
$result = $stmt->fetchAll(); 

?>


<body>
  <?php
  require_once('header.php');
  ?>

  <h1>Tous les plats</h1>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">





        <!-- Carousel -->
        <!-- 
      const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
      interval: 2000,
      touch: false
  }) -->

        <!----------------------------------------------------------------------------------->
        <div id="carousel_plat" class="carousel slide" data-bs-ride="carousel">

          <!-- Indicators/dots -->
<!--
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="5"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="6"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="7"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="8"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="9"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="10"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="11"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="12"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="13"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="14"></button>
            <button type="button" data-bs-target="#carousel_plat" data-bs-slide-to="15"></button>
          </div>
-->
          <!---------------------------------------------------------------------------------->

<form action='indexcommande.php' method='get'>
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">

<?php $i = 0;
          foreach($result as $plat){ ?>
            <div class="carousel-item <?php if($i == 0){echo 'active'; $i++;} ?> ">
              <img src="assets/img/food/<?= $plat['image']; ?>" alt="buffalo-chicken" class="d-block w-100">
              <div class='row justify-content-center'>
                <button type="submit" name="numcommande" value="<?=$plat['id'] ?>" class="btn btn-primary btn-sm col-4 mt-1">Commander</button>
              </div>
            </div>

        <?php  }; ?>

            <!-- <div class="carousel-item active">
              <img src="assets/img/food/buffalo-chicken.webp" alt="buffalo-chicken" class="d-block w-100">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/cesar_salad.jpg" alt="cesar_salad" class="d-block w-100">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/cheesburger.jpg" alt="cheesburger" class="d-block w-100">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/hamburger.jpg" class="d-block w-100" alt="Food-hamburger">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/courgettes_farcies.jpg" class="d-block w-100" alt="courgettes_farcies">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/Food-Name-3631.jpg" class="d-block w-100" alt="Croque-monsieur">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/Food-Name-8298.jpg" class="d-block w-100" alt="pizza_aux_épinards">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/pizza-salmon.png" class="d-block w-100" alt="pizza-salmon">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/salad1.png" class="d-block w-100" alt="salad1">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/spaghetti-legumes.jpg" class="d-block w-100" alt="spaghetti-legumes">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/tagliatelles-au-saumon.jpeg" class="d-block w-100" alt="tagliatelles_saumon">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/Team_Restau/poulet_dg.jpg" class="d-block w-100" alt="poulet DG">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/Team_Restau/Poulet_Yassa.jpg" class="d-block w-100" alt="poulet_yassa">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
          <div class="carousel-item">
            <img src="assets/img/Team_Restau/Beignets_haricots.jpeg" class="d-block w-100" alt="beignets - haricots rouges">
            <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
           </div>
            <div class="carousel-item">
              <img src="assets/img/Team_Restau/okok.jpg" class="d-block w-100" alt="okok avec du manioc">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
             </div>
            
            <div class="carousel-item">
              <img src="assets/img/Team_Restau/Ndole.jpg" class="d-block w-100" alt="ndolè accompagné de baton de manioc">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/asiat2.jpeg" class="d-block w-100" alt="rouleau de printemps">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>

            <div class="carousel-item">
              <img src="assets/img/food/asiat1.jpeg" class="d-block w-100" alt="nouilles au boeuf">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>

            <div class="carousel-item">
              <img src="assets/img/food/asiat3.jpeg" class="d-block w-100" alt="ravioli à la vapeur">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div>

            <div class="carousel-item">
      
              <img src="assets/img/food/asiat4.jpeg" class="d-block w-100" alt="beignets de crevettes et nems au poulet">
              <a href="the_district_php/cdesthedistrict.php" class="btn btn-primary btn-sm">Commander</a>
            </div> -->
    
          </div>


<?php

$stmt->closeCursor();

?>

          <!-- Left and right controls/icons -->
          <div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_plat" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel_plat" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>






          <!--




        <div id="carouselExampleDark" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="assets/img/food/buffalo-chicken.webp" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="assets/img/Team_Restau/Poulet-Directeur-General.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/food/cheesburger.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>


-->






          <?php
          require_once('footer.php');
          ?>

          <!-- script bootstrap et JS -->

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>

</html>
