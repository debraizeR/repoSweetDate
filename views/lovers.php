<!DOCTYPE html>
<html>

<head>
    <title>Exercice 2 - PHP</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>

<body>

    <?php

    $profiles = array(
        "Profil 1" => array(
            "nom" => "Dupond",
            "prénom" => "Marie",
            "age" => 30,
            "genre" => "Femme",
            "email" => "dupondmarie@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 2" => array(
            "nom" => "Durand",
            "prénom" => "Mélanie",
            "age" => 32,
            "genre" => "Femme",
            "email" => "durandmelanie@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 3" => array(
            "nom" => "Bertrand",
            "prénom" => "Sandra",
            "age" => 24,
            "genre" => "Femme",
            "email" => "bertrandsandra@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 4" => array(
            "nom" => "Lopes",
            "prénom" => "Vanessa",
            "age" => 30,
            "genre" => "Femme",
            "email" => "lopesvanessa@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 5" => array(
            "nom" => "Dubec",
            "prénom" => "Valérie",
            "age" => 36,
            "genre" => "Femme",
            "email" => "dubecvalérie@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 6" => array(
            "nom" => "Vincent",
            "prénom" => "Chloé",
            "age" => 27,
            "genre" => "Femme",
            "email" => "vincentchloe@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 7" => array(
            "nom" => "Perrin",
            "prénom" => "Léa",
            "age" => 38,
            "genre" => "Homme",
            "email" => "perrinlea@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 8" => array(
            "nom" => "Da Silva",
            "prénom" => "Anna",
            "age" => 40,
            "genre" => "Femme",
            "email" => "dasilvaanna@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 9" => array(
            "nom" => "Sanchez",
            "prénom" => "Sabrina",
            "age" => 34,
            "genre" => "Femme",
            "email" => "sanchezsabrina@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 10" => array(
            "nom" => "Vidal",
            "prénom" => "Emma",
            "age" => 30,
            "genre" => "Homme",
            "email" => "vidalemma@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 11" => array(
            "nom" => "Arnaud",
            "prénom" => "David",
            "age" => 30,
            "genre" => "Homme",
            "email" => "arnauddavid@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 12" => array(
            "nom" => "Martinez",
            "prénom" => "Luis",
            "age" => 34,
            "genre" => "Homme",
            "email" => "martinezluis@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 13" => array(
            "nom" => "Giraud",
            "prénom" => "Etienne",
            "age" => 30,
            "genre" => "Homme",
            "email" => "giraudetienne@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 14" => array(
            "nom" => "Morin",
            "prénom" => "Liam",
            "age" => 31,
            "genre" => "Homme",
            "email" => "morinliam@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 15" => array(
            "nom" => "Dumont",
            "prénom" => "Pierre",
            "age" => 40,
            "genre" => "Homme",
            "email" => "dumontpierre@gmail.com",
            "code postal" => 33000,
            "ville" => "Bordeaux",
        ),
        "Profil 16" => array(
            "nom" => "Dupond",
            "prénom" => "Marie",
            "age" => 30,
            "genre" => "Homme",
            "email" => "dupondmarie@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
        "Profil 17" => array(
            "nom" => "Leroy",
            "prénom" => "Paul",
            "age" => 45,
            "genre" => "Homme",
            "email" => "leroypaul@gmail.com",
            "code postal" => 75015,
            "ville" => "Paris",
        ),
        "Profil 18" => array(
            "nom" => "Richard",
            "prénom" => "Sam",
            "age" => 38,
            "genre" => "Homme",
            "email" => "richardsam@gmail.com",
            "code postal" => 13004,
            "ville" => "Marseille",
        ),
        "Profil 19" => array(
            "nom" => "Dubois",
            "prénom" => "Mickael",
            "age" => 42,
            "genre" => "Homme",
            "email" => "duboismickael@gmail.com",
            "code postal" => 75010,
            "ville" => "Paris",
        ),
        "Profil 20" => array(
            "nom" => "Bendia",
            "prénom" => "Amir",
            "age" => 48,
            "genre" => "Homme",
            "email" => "bendiaamir@gmail.com",
            "code postal" => 76600,
            "ville" => "Le Havre",
        ),
    );

    foreach ($profiles as $key => $value) {

        //echo $key . "<br>";
        ?>
        
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">

        <?php 
        if (is_array($value)) {
            foreach ($value as $key => $value) {
                echo $key . " : " . $value . "<br>";
    
            }
    
        }
        ?>
        
    </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>

        <?php
        echo "<br>";
    }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>