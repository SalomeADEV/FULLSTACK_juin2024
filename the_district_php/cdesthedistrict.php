<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/style.css">
    <title>Commandes</title>
</head>
<body>



<!-- -----ici mon header----->

  <?php 

  require_once('header.php')
  ?>
     
  
       <input type="text" class="form-control" placeholder="Nom Prénom" aria-label="Nom - Prénom">
      </div>
      </div>


    <form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    
    <div class="col-6">
    <label for="inputTelephone" class="form-label">Téléphone</label>
    <input type="textbox" class="form-control" id="inputTelephone">       
    </label>
    </div>
      
    <div class="col-12">
     <div class="form-label">
      <label for="demande" class="col-3">Votre demande</label><textarea col="500" rows="4" name="demande" class="form-control"></textarea>
     </div>
    </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
  </form>
 

<?php 
require_once('footer.php')
?>


 
  <!-- script bootstrap et JS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- <script src="assets/js/script.js"></script> -->

</body>
</html>