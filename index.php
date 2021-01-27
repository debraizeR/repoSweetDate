<?php   
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sweet Date</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/style.css" />
  
</head>

<body>
  

  <nav class="navbar navbar-expand-lg navbar-light bg-light-dark">
    <div class="container-fluid">

      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="">Accueil</a>
        <a class="nav-link active" aria-current="page" href="../repoSweetDate/views/lovers.php">Nos célibataires</a>
        <a class="nav-link" href="#"></a>

        <button type="button" class="btn1 btn-secondary">Se connecter</button>
      </div>
    </div>
    </div>
  </nav>

  <div class="header-home">
    <h1 class="title text-center align-center">SWEET DATE</h1>
  </div>
  <div class="container">

    <div class="row d-flex justify-content-center mt-5">
      <div class="card" style="width: 28rem;">

        <div class="card-body">

          <p class="card-text">Il est temps de rencontrer votre moitié.</p>
          <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Vous recherchez un homme</a>


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Inscrivez-vous !</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="index.php" method="post">
                    <label for="firstname">Prénom : </label><br>
                    <input type="text" id="firstname" name="firstname" required><br>
                    <label for="lastname">Nom : </label><br>
                    <input type="test" id="lastname" name="lastname" required><br>
                    <label for="age">Age : </label><br>
                    <input type="text" id="age" name="age" required><br>
                    <label for="gender">Genre : </label><br>
                    <div>
                      <input type="radio" id="homme" name="gender" value="homme" required>Homme</input><br>
                      <input type="radio" id="femme" name="gender" value="femme">Femme</input><br>
                    </div>
                    <label for="mail">Adresse mail : </label><br>
                    <input type="text" id="mail" name="mail" required><br>
                    <label for="zipcode">Code postal : </label><br>
                    <input type="text" id="zipcode" name="zipcode" required><br>
                    <label for="picture">Photo de profil : </label><br>
                    <label for="description">Description : </label><br>
                    <textarea rows="4" id="description" name="description" required></textarea><br>
                    <label for="genderSearch">Genre recherché : </label><br>
                    <div>
                      <input type="radio" id="homme" name="genderSearch" value="homme" required>Homme</input><br>
                      <input type="radio" id="femme" name="genderSearch" value="femme">Femme</input><br>
                    </div>


                    <input type="submit" id="confirm" name="confirm" value="Confirmer">
                  </form>

                  <?php include("controllers/index_controller.php");

                  if (!empty($_POST["firstname"])) {
                    echo $firstname;
                  } else {
                    echo "vide";
                  }  ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <a href="#" class="btn btn-primary mt-3">Vous recherchez une femme</a>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>