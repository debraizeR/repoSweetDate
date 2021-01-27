<?php require("../controllers/lovers_controller.php");?>

<!DOCTYPE html>
<html>

<head>
    <title>Lovers</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>

</head>

<body>
<div class="container">
    <div class="row">
        <?= $firstname." ".$lastname; ?>
    </div>
    <div class= "row justify-content-between">
    <?php

    $profiles = array(
        "Profil 1" => array(
            "Nom" => "Dupond",
            "Prénom" => "Marie",
            "Age" => 30,
            "Genre" => "Femme",
            "E-mail" => "dupondmarie@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 2" => array(
            "Nom" => "Durand",
            "Prénom" => "Mélanie",
            "Age" => 32,
            "Genre" => "Femme",
            "E-mail" => "durandmelanie@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 3" => array(
            "Nom" => "Bertrand",
            "Prénom" => "Sandra",
            "Age" => 24,
            "Genre" => "Femme",
            "Email" => "bertrandsandra@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 4" => array(
            "Nom" => "Lopes",
            "Prénom" => "Vanessa",
            "Age" => 30,
            "Genre" => "Femme",
            "E-mail" => "lopesvanessa@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 5" => array(
            "Nom" => "Dubec",
            "Prénom" => "Valérie",
            "Age" => 36,
            "Genre" => "Femme",
            "E-mail" => "dubecvalérie@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 6" => array(
            "Nom" => "Vincent",
            "Prénom" => "Chloé",
            "Age" => 27,
            "Genre" => "Femme",
            "E-mail" => "vincentchloe@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 7" => array(
            "Nom" => "Perrin",
            "Prénom" => "Léa",
            "Age" => 38,
            "Genre" => "Homme",
            "E-mail" => "perrinlea@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 8" => array(
            "Nom" => "Da Silva",
            "Prénom" => "Anna",
            "Age" => 40,
            "Genre" => "Femme",
            "E-mail" => "dasilvaanna@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 9" => array(
            "Nom" => "Sanchez",
            "Prénom" => "Sabrina",
            "Age" => 34,
            "Genre" => "Femme",
            "E-mail" => "sanchezsabrina@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 10" => array(
            "Nom" => "Vidal",
            "Prénom" => "Emma",
            "Age" => 30,
            "Genre" => "Homme",
            "E-mail" => "vidalemma@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 11" => array(
            "Nom" => "Arnaud",
            "Prénom" => "David",
            "Age" => 30,
            "Genre" => "Homme",
            "E-mail" => "arnauddavid@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 12" => array(
            "Nom" => "Martinez",
            "Prénom" => "Luis",
            "Age" => 34,
            "Genre" => "Homme",
            "E-mail" => "martinezluis@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 13" => array(
            "Nom" => "Giraud",
            "Prénom" => "Etienne",
            "Age" => 30,
            "Genre" => "Homme",
            "Email" => "giraudetienne@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 14" => array(
            "Nom" => "Morin",
            "Prénom" => "Liam",
            "Age" => 31,
            "Genre" => "Homme",
            "E-mail" => "morinliam@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 15" => array(
            "Nom" => "Dumont",
            "Prénom" => "Pierre",
            "Age" => 40,
            "Genre" => "Homme",
            "E-mail" => "dumontpierre@gmail.com",
            "Code postal" => 33000,
            "Ville" => "Bordeaux",
        ),
        "Profil 16" => array(
            "Nom" => "Dupond",
            "Prénom" => "Marie",
            "Age" => 30,
            "Genre" => "Homme",
            "E-mail" => "dupondmarie@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
        "Profil 17" => array(
            "Nom" => "Leroy",
            "Prénom" => "Paul",
            "Age" => 45,
            "Genre" => "Homme",
            "E-mail" => "leroypaul@gmail.com",
            "Code postal" => 75015,
            "Ville" => "Paris",
        ),
        "Profil 18" => array(
            "Nom" => "Richard",
            "Prénom" => "Sam",
            "Age" => 38,
            "Genre" => "Homme",
            "E-mail" => "richardsam@gmail.com",
            "Code postal" => 13004,
            "Ville" => "Marseille",
        ),
        "Profil 19" => array(
            "Nom" => "Dubois",
            "Prénom" => "Mickael",
            "Age" => 42,
            "Genre" => "Homme",
            "E-mail" => "duboismickael@gmail.com",
            "Code postal" => 75010,
            "Ville" => "Paris",
        ),
        "Profil 20" => array(
            "Nom" => "Bendia",
            "Prénom" => "Amir",
            "Age" => 48,
            "Genre" => "Homme",
            "E-mail" => "bendiaamir@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
        ),
    );


    foreach ($profiles as $key => $value) {
        $idimage = $key;

        //echo $key . "<br>";
        ?>
        <div class= "col-md-6">
        <div class="card">
            
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <div class="row">
                <div class="col">
            
            <h5 class="card-title">Card title</h5>
            <p class="card-text">

        <?php 
        if (is_array($value)) {
            foreach ($value as $key => $value) {
                echo $key . " : " . $value . "<br>";
    
            }
    
        }
        ?>
        
    </p></div>
        <div class= "col">
            <img id="photo" src="../photoprofil1.jpeg"/>
        </div>

    </div>
        <a href="#" class="btn btn-primary">J'aime</a>
        </div>
        </div></div>

        <?php
        echo "<br>";
    }
    ?>
    </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>