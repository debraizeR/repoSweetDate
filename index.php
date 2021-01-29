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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>
  <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light-dark">
    <div class="container-fluid d-flex">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../index.php"><img class="img-fluid imgNav" src="/assets/img/logo1.png" /></a>
        <a class="nav-link" href="#"></a>
        <a type="button" class="btn2 btn ms-auto" href="../views/user.php">Se connecter</a>
      </div>
    </div>
  </nav> -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
      <!-- this is to make it responsive to your screen width -->
      <div class="row">
        <div class="col-md-4">
          <!-- myClassName is defined in my CSS as you defined your container -->
          <a class="navbar-brand" href="index.html"><img src="/assets/img/logo22.png" height="60px" width="60px">
        </div>
      </div>
    </div>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">à propos</a>
        </li>
        <li class="nav-item d-flex">
          <a class="nav-link" href="#">Nos célibataires</a>
        </li>
      </ul>
      <div class="d-flex">
        <button class="btn2 m-4" type="submit">Se connecter</button>
      </div>
    </div>
    </div>

  </nav>

  <div class="header-home">
    <h1 class="animate__animated animate__bounce title text-center align-center mb-2">SWEET<span class="m-2"><img src="/assets/img/logo22.png" id="logo2" /></span>DATE</h1>
    <h2 class="card-text slogan">Il est temps de rencontrer votre moitié.</h2>
    <div class="container-fluid">

      <div class="row mt-5">
        <div class="col-lg-4 offset-4">
          <div class="card card-deck m-5 " style="width:22rem;">

            <div class="card-body cardindex">
              <form action="index.php" method="post">

                <a href="#" class="btn mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="Homme" name="choice" value="Homme">Vous recherchez un homme</a>
                <a href="#" class="btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="Femme" name="choice" value="Femme">Vous recherchez une femme</a>

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
                        <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                          <!-- <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
      </div>
      <div class="modal-body">
          <p>Thanks for getting in touch!</p>                     
      </div>     -->
                        </div>
                      </div>
                    </div>
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




  <div class="container" id="badges">
    <div class="card-group">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <li class="infotext-0">
            <div class="image"></div>
            <div class="usp-text">
              <h3>SÛR & SÉCURISÉ</h3>
              <p>Profils vérifiés quotidiennement <br>pour faire des rencontres en toute <br>sécurité.</p>
            </div>
          </li>
        </div>
      </div>
      <div class="card text-align-center">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <li class="infotext-1">
            <div class="image"></div>
            <div class="usp-text">
              <h3>85% AVEC UN HAUT <br>NIVEAU D'ÉTUDES </h3>
              <p>Nos membres ont une formation <br>supérieure à la moyenne.</p>
            </div>
          </li>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <li class="infotext-2">
      <div class="image"></div>
      <div class="usp-text">
        <h3>+10 000 NOUVEAUX <br>MEMBRES PAR MOIS</h3>
        <p>Nombre moyen d'inscriptions <br>mensuelles en Europe en 2020.</p>
      </div>
    </li>
    </ul>
        </div>
      </div>
    </div>

    <div class="container" id="about">
      <div class="row">
        <div class="col-sm-3">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/img/profils/profil1.jpg" id="photo" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/img/profils/profil2.jpg" id="photo" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/img/profils/profil3.jpg" id="photo" class="d-block w-100 img-fluid" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>

        </div>
        <div class="card-col-sm-3" style="width: 60%;">
          <div class="card-body">
            <h1 class="card-subtitle mb-2 text-muted about">à propos</h1>
            Sweet Date est un site de rencontre par affinités, dédié aux célibataires appartenant aux catégories socioprofessionnelles supérieures.

            Reposant sur le même test de personnalité, scientifique complet que celui utilisé par eDarling, les membres sont mis en relation en fonction de leurs exigences.
            L’efficacité de ce test de personnalité et de l’algorithme de compatibilité s’appuie sur le modèle des Big Five Personnality Traits. Ce procédé permet de déterminer la compatibilité des couples et de les mettre en relation avec les personnes qui leur correspondent le mieux.

            Sweet Date est un site pour célibataires privilégiés, aussi ambitieux dans leur vie personnelle que dans leur vie professionnelle et qui souhaitent rencontrer des personnes ayant le même statut social qu’eux.

            Sweet Date souhaite offrir un service haut de gamme à ses membres et leur permettre de rencontrer LA personne qui les comble vraiment.

          </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
<footer>
  <footer class="usps">
    </div>
    <div class="footer-container">
      <ul class="footerNavi">
        <img src="https://www.eliterencontre.fr/cs/tp.png?channel=6&amp;requested=http%3A%2F%2Fcelibataire.eliterencontre.fr%2Fxijokl%2F813653%2F%3Fseg%3Dbr%26utm_term%3DElite%2520Rencontre%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_content%3DEliteRencontre%26utm_campaign%3DRLSA%2520Recurring%2520Users%2520%255BE%255D%26msclkid%3Dfb1a0f62d823144b63296f71f7c56bf9%26CID%3Dfr-EFR_SEM_14_361142208_1178677327871814_73667445198163_recurringusers%3Fseg%3Dbr%26utm_term%3DElite%2520Rencontre%26utm_source%3Dbing%26utm_medium%3Dcpc%26utm_content%3DEliteRencontre%26utm_campaign%3DRLSA%2520Re
                                  <footer class=" footer-distributed">

        <div class="footer-left">
          <h3 id=footer-title>Sweet Date</h3>

          <p class="footer-links">
            <a href="/index.php">Accueil</a>
            |
            <a href="/views/mentions.html">Mentions légales</a>
          </p>
        </div>

        <div class="footer-center">
          <div>
            <i class="fas fa-map-marker-alt"></i>
            <p>12 Rue Frédéric Bellanger<br>
              76600 Le Havre</p>
          </div>

        
          <div>
            <i class="fa fa-envelope"></i>
            <p>sweetdate@gmail.com</p>
          </div>
        </div>
    
  </footer>

</html>