<?php require("../controllers/user_controller.php");
if(isset($_POST["deleteCookie"])){deleteAllCookie(); header("Location: ../index.php");exit();}
?>

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
        <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
        <a class="nav-link active" aria-current="page" href="../views/lovers.php">Nos célibataires</a>
        <a class="nav-link" href="#"></a>
        <a type="button" class="btn1 btn connexion" href="">Profil</a></button>
      </div>
    </div>
    </div>
  </nav>
<div class="container">
    <div class="row">
        <div class="col-6">
            <?= $firstname." ".$lastname." ".$age." ".$gender." ".$mail." ".$zipcode." ".$choice; ?>
        </div>
        <div class="col-6">
        <form action="user.php" method="post">
        <button type="submit" class="btn justify-content-center" id="deleteCookie" name="deleteCookie">Supprimer les cookies</button>
        </form>
        </div>
    </div>
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>