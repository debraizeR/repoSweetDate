<!DOCTYPE html>
<html>

<head>
    <title>Lovers</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css"/>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light-dark">
    <div class="container-fluid">

      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        <a class="nav-link active" aria-current="page" href="../repoSweetDate/views/lovers.php">Nos célibataires</a>
        <a class="nav-link" href="#"></a>

        <button type="button" class="btn1 btn">Se connecter</button>
      </div>
    </div>
    </div>
  </nav>
<div class="container">
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
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 2" => array(
            "Nom" => "Durand",
            "Prénom" => "Mélanie",
            "Age" => 32,
            "Genre" => "Femme",
            "E-mail" => "durandmelanie@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br> Préfère les longues conversations plutôt que les rencontres superficielles",
        ),
        "Profil 3" => array(
            "Nom" => "Bertrand",
            "Prénom" => "Sandra",
            "Age" => 24,
            "Genre" => "Femme",
            "Email" => "bertrandsandra@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 4" => array(
            "Nom" => "Lopes",
            "Prénom" => "Vanessa",
            "Age" => 30,
            "Genre" => "Femme",
            "E-mail" => "lopesvanessa@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 5" => array(
            "Nom" => "Dubec",
            "Prénom" => "Valérie",
            "Age" => 26,
            "Genre" => "Femme",
            "E-mail" => "dubecvalérie@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 6" => array(
            "Nom" => "Vincent",
            "Prénom" => "Chloé",
            "Age" => 27,
            "Genre" => "Femme",
            "E-mail" => "vincentchloe@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 7" => array(
            "Nom" => "Perrin",
            "Prénom" => "Léa",
            "Age" => 38,
            "Genre" => "Homme",
            "E-mail" => "perrinlea@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 8" => array(
            "Nom" => "Da Silva",
            "Prénom" => "Anna",
            "Age" => 40,
            "Genre" => "Femme",
            "E-mail" => "dasilvaanna@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 9" => array(
            "Nom" => "Sanchez",
            "Prénom" => "Sabrina",
            "Age" => 34,
            "Genre" => "Femme",
            "E-mail" => "sanchezsabrina@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>À la recherche de quelqu’un pour pleurer 
            avec moi devant les films romantiques",
        ),
        "Profil 10" => array(
            "Nom" => "Vidal",
            "Prénom" => "Emma",
            "Age" => 30,
            "Genre" => "Femme",
            "E-mail" => "vidalemma@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>Si tu n’as rien dans le cerveau, ne vient pas me parler",
        ),
        "Profil 11" => array(
            "Nom" => "Arnaud",
            "Prénom" => "David",
            "Age" => 30,
            "Genre" => "Homme",
            "E-mail" => "arnauddavid@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>Tacos, Dormir, Tacos, Aller au travail, Tacos, Faire du sport, 
            Tacos, Regarder un film, Tacos … on mange ensemble ?",
        ),
        "Profil 12" => array(
            "Nom" => "Martinez",
            "Prénom" => "Luis",
            "Age" => 34,
            "Genre" => "Homme",
            "E-mail" => "martinezluis@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>« Grand amateur de Rock Anglais, 
            collectionneur de vinyles et accessoirement joueur de batterie le week-end »",
        ),
        "Profil 13" => array(
            "Nom" => "Giraud",
            "Prénom" => "Etienne",
            "Age" => 30,
            "Genre" => "Homme",
            "Email" => "giraudetienne@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>Si tu aimes le sport extrême 
            et que tu as un chat, alors je t’aime déjà ",
        ),
        "Profil 14" => array(
            "Nom" => "Morin",
            "Prénom" => "Liam",
            "Age" => 31,
            "Genre" => "Homme",
            "E-mail" => "morinliam@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>Ça te dit d’aller prendre un verre avec moi ?",
        ),
        "Profil 15" => array(
            "Nom" => "Dumont",
            "Prénom" => "Pierre",
            "Age" => 46,
            "Genre" => "Homme",
            "E-mail" => "dumontpierre@gmail.com",
            "Code postal" => 33000,
            "Ville" => "Bordeaux",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageur, viens donc me parler",
        ),
        "Profil 16" => array(
            "Nom" => "Chaby",
            "Prénom" => "Hamid",
            "Age" => 30,
            "Genre" => "Homme",
            "E-mail" => "dupondmarie@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 17" => array(
            "Nom" => "Leroy",
            "Prénom" => "Paul",
            "Age" => 35,
            "Genre" => "Homme",
            "E-mail" => "leroypaul@gmail.com",
            "Code postal" => 75015,
            "Ville" => "Paris",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 18" => array(
            "Nom" => "Richard",
            "Prénom" => "Sam",
            "Age" => 28,
            "Genre" => "Homme",
            "E-mail" => "richardsam@gmail.com",
            "Code postal" => 13004,
            "Ville" => "Marseille",
            "Description" => " <br>La semaine dernière à New York, le mois prochain à Istanbul. 
            Si toi aussi tu as l’âme voyageuse, viens donc me parler",
        ),
        "Profil 19" => array(
            "Nom" => "Dubois",
            "Prénom" => "Mickael",
            "Age" => 32,
            "Genre" => "Homme",
            "E-mail" => "duboismickael@gmail.com",
            "Code postal" => 75010,
            "Ville" => "Paris",
            "Description" => " <br>Bricoleur et très bon cuisinier je te ferais de bons petits plats.",
        ),
        "Profil 20" => array(
            "Nom" => "Bendy",
            "Prénom" => "Amir",
            "Age" => 28,
            "Genre" => "Homme",
            "E-mail" => "bendiaamir@gmail.com",
            "Code postal" => 76600,
            "Ville" => "Le Havre",
            "Description" => " <br>Timide et romantique, faisons connaissance",
        ),
    );

    foreach ($profiles as $key => $value) {
        $idimage = $key;

        //echo $key . "<br>";
        ?>
        <div class= "col-md-6">
        <div class="card">
            
      
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
        <img id="photo" src="../assets/img/profils/profil1.jpg"/>
        </div>

    </div>
        <a href="#" class="btn btn-primary">J'aime <i class='far fa-thumbs-up' style='font-size:36px'></i></a>
        </div>
        </div></div>

        <?php
        echo "<br>";
    }
    ?>
    </div>
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>