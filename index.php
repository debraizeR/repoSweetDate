<?php require("controllers/index_controller.php");
if ($testCookie) {
  header("Location: /views/lovers.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sweet Date</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo3.png">


</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light-dark">
    <div class="container-fluid d-flex">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../index.php"><img class="img-fluid imgNav" src="/assets/img/logo1.png" /></a>
        <a class="nav-link" href="#"></a>
        <a type="button" class="btn2 btn ms-auto" href="../views/user.php">Se connecter</a>
      </div>
    </div>
  </nav>

  <div class="header-home">
    <h1 class="title text-center align-center">SWEET DATE</h1>
    <h2 class="card-text slogan">Il est temps de rencontrer votre moitié.</h2>
    <div class="container-fluid">

      <div class="row mt-5">
        <div class="col-lg-4 offset-2">
          <div class="card card-deck m-3 " style="width: 28rem;">

            <div class="card-body cardindex">
              <form action="index.php" method="post">

                <a href="#" class="animate__shakeX btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="Homme" name="choice" value="Homme">Vous recherchez un homme</a>
                <a href="#" class="animate__shakeX btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="Femme" name="choice" value="Femme">Vous recherchez une femme</a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inscrivez-vous !</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                        <label for="lastname">Nom : </label><br>
                        <input type="test" id="lastname" name="lastname" required><br>
                        <label for="firstname">Prénom : </label><br>
                        <input type="text" id="firstname" name="firstname" required><br>
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
                        <label for="description">Description : </label><br>
                        <textarea rows="4" id="description" name="description" required></textarea><br>

                      </div>
                      <div class="modal-footer">
                        <input type="hidden" name="choice" id="choice">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" id="confirm" name="confirm" class="btn btn-primary">Sauvegarder</button>
                      </div>

                    </div>
                  </div>
                </div>


            </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container" id="about">

    <div class="row">
      <div class="col-sm-6">
        bonjour
      </div>
      <div class="col-sm-6">
        <p>
          Sweet Date est un site de rencontre par affinités, dédié aux célibataires appartenant aux catégories socioprofessionnelles supérieures.

          Reposant sur le même test de personnalité, scientifique complet que celui utilisé par eDarling, les membres sont mis en relation en fonction de leurs exigences. L’efficacité de ce test de personnalité et de l’algorithme de compatibilité s’appuie sur le modèle des Big Five Personnality Traits. Ce procédé permet de déterminer la compatibilité des couples et de les mettre en relation avec les personnes qui leur correspondent le mieux.

          EliteRencontre est un site pour célibataires privilégiés, aussi ambitieux dans leur vie personnelle que dans leur vie professionnelle et qui souhaitent rencontrer des personnes ayant le même statut social qu’eux.

          EliteRencontre souhaite offrir un service haut de gamme à ses membres et leur permettre de rencontrer LA personne qui les comble vraiment.

        </p>
      </div>
    </div>
  </div>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script>
    const homme = document.getElementById('Homme');
    const choice = document.getElementById('choice');
    homme.addEventListener('click', function() {
      choice.value = 'Homme';
    })

    const femme = document.getElementById('Femme');
    femme.addEventListener('click', function() {
      choice.value = 'Femme';
    })
  </script>
</body>

</html>