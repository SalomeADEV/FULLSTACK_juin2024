<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="contactdistrictstyle.css">
  <title>Contact</title>
</head>

<body>


  <!-------------ici mon header-->
  <?php
  require_once("header.php");
  ?>
  <!--
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="Accueil">
          <img class="logo" src="assets/img/the_district_brand/logo.png" width="150" height="150" alt="logo">
        </div>
        <div class="container-fluid">
          <a class="navbar-brand" href="Pageaccueil.php">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="categories.php">Catégorie</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Pageplats.php">Plats</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contactdistrict.php">Contact</a>
                    </li>
                  </ul>
                  
                
                
            <div class="background image">
          <body style=background-color:light-blue>  
        <div class="row g-3">
</nav>

-->
  <div class="container">
    <div class="col-1"></div>
    <form class="row g-3 m-3">
      <div style=background-color:light-blue>
        <div class="row g-3">

          <div class="col">
            <input id="input_nom" name="input_nom" type="text" class="form-control" placeholder="Nom" aria-label="Nom">
          </div>

          <div class="col">
            <input id="input_prenom" name="input_prenom" type="text" class="form-control" placeholder="Pr&eacute;nom" aria-label="Pr&eacute;nom">
          </div>
        </div>

        <div class="mt-2 row g-3">
          <div class="col">
            <input id="input_email" name="input_email" type="email" class="form-control" placeholder="Email">
          </div>
          <div class="col">
            <input id="input_tel" name="input_tel" type="textbox" class="form-control" placeholder="T&eacute;l&eacute;phone">
          </div>
        </div>
        <div class="mt-4 col-12">
          <div class="form-label">
            <textarea col="500" rows="4" name="demande" class="form-control" placeholder="Votre demande"></textarea>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
    <div class="col-1"></div>
  </div>







  <!--  no commentaire-><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
</fieldset>


</fieldset>
<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nom" aria-label="Nom"><br>
        <p>Ce champ est obligatoire</p><br><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <div class="col">
      <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom"><br>
    </div>
  </div>

  <div class="row g-2">
    <div class="col">
      <input type="text" class="form-control" placeholder="Email" aria-label="Email"><br>
    </div><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <div class="col">
    <input type="text" class="form-control" placeholder="Telephone"aria-label=" Telephone"><br>
    <p>Ce champ est obligatoire</p>
    </div>
  </div>

 </fieldset><br>
        <label for="nom">Nom</label><input type="text" name="nom" id="Votre Nom"><br>
        <p>Ce champ est obligatoire</p>
        <label for="prénom">Prénom</label><input type="text" name="prénom" id="Prénom"><br>
        <label for="email"></label>Email:<input type="text" name="email" id="email"><br> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <label for="Téléphone"></label>Téléphone:<input type="number" name="Téléphone" id="Téléphone"><br>
        <p>Ce champ est obligatoire</p>
        <div class="container-fluid">Votre demande</div>
        <textarea name="commentaire" rows="5" cols="40"></textarea>
       

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Envoyer</button>
        </form> 

</fieldset> -->



  <!-------->                <p class="card-text"></p>



  <?php
  require_once("footer.php");
  ?>

  <!-- script bootstrap et JS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- <script src="assets/js/script.js"></script> -->

</body>

</html>