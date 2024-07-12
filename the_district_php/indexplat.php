<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher_plat_Categorie</title>
</head>

<body>

    <?php
    require_once("header.php");
    require_once("header.php");

    $servername = "localhost";
    $username = "admin";
    $password = "Afpa1234";
    $dbname = "the_district";
    

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // configurer le mode d'erreur PDO pour générer des exceptions
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connecté avec succès à la base de données";
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }
    $stmt = $conn->query("SELECT * FROM plat;");
    while ($row = $stmt->fetch()) {
        echo $row['id'] . "<br";
        echo $row['libelle'] . "<br>";
        echo $row['categorie'] . "<br";
        echo $row['prix'] . "<br>";
    }
    ?>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Categories_populaires<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories_actives</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">plats</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Categories_populaires</a>
                        <a class="dropdown-item" href="#">Categories_actives</a>
                        <a class="dropdown-item" href="#">plats</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>



</body>

</html>