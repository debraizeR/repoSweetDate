<?php require("../controllers/user_controller.php");
if (isset($_POST["deleteCookie"])) {
    deleteAllCookie();
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lovers</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />

</head>

<body class="bodylovers">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container-fluid">
  <!-- this is to make it responsive to your screen width -->
  <div class="row">
    <div class="col-md-4">
      <!-- myClassName is defined in my CSS as you defined your container -->
      <a class="navbar-brand" href="../index.php"><img src="/assets/img/logo22.png" height="60px" width="60px"></a>
    </div>
  </div>
</div>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
    
    <li class="nav-item d-flex">
      <a class="nav-link" href="../views/lovers.php">Nos célibataires</a>
    </li>
  </ul>
  <div class="d-flex">
  <a type="button" class="btn2 btn connexion" href="">Profil</a></button>
  </div>
</div>


</nav>
    <div class="row justify-content-center my-3">
        <div class="col-8">
            <div class="card card1">
                <div class="card-header">
                    Votre profil
                </div>
                <div class="card-body">

                    <p class="h5">Nom : <?= $firstname; ?></p>
                        <p class="h5">Prénom : <?= $lastname; ?></p>
                        <p class="h5">Age : <?= $age; ?></p>
                        <p class="h5">Genre : <?= $gender; ?></p>
                        <p class="h5">Adresse mail : <?= $mail; ?></p>
                        <p class="h5">Code postal : <?= $zipcode; ?></p>
                        <p class="h5">Genre recherché : <?= $choice; ?></p>
                        <p class="h5">Description : <?= $description; ?></p>
                        
                </div>
            </div>
        </div>



            <div class="col-4">
                <form action="user.php" method="post">
                    <button type="submit" class="btn btn2 justify-content-center" id="deleteCookie" name="deleteCookie">Supprimer les cookies</button>
                </form>
                <br>
                <a type="button" class="btn btn2 justify-content-center" id="meetc" name="meetic" href="https://www.meetic.fr/">TAKE MY MONEY</a>
            </div>
        </div>
    </div>


    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>