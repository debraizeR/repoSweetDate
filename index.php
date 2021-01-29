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

<body class="bodylovers">
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
          <a class="navbar-brand" href=""><img src="/assets/img/logo22.png" height="60px" width="60px"></a>
        </div>
      </div>
    </div>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about">à propos</a>
        </li>
        <li class="nav-item d-flex">
          <a class="nav-link" href="../views/lovers.php">Nos célibataires</a>
        </li>
      </ul>
      <div class="d-flex">
      <a type="button" class="btn2 btn connexion" href="">Se connecter</a></button>
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
                        <input type="text" id="lastname" name="lastname" required><br>
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" id="confirm" name="confirm" class="btn btn-primary">Sauvegarder</button>
                        <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                        
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

  </div>

  <div class="container" id="badges">
    <div class="card-group">
      <div class="card text-align-center">
        <img src="../assets/img/badge2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="usp-text">
            <h3>SÛR & SÉCURISÉ</h3>
            <p>Profils vérifiés quotidiennement <br>pour faire des rencontres en toute <br>sécurité.</p>
          </div>

        </div>
      </div>
      <div class="card text-align-center">
        <img src="../assets/img/badge3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="usp-text">
            <h3>85% AVEC UN HAUT <br>NIVEAU D'ÉTUDES </h3>
            <p>Nos membres ont une formation <br>supérieure à la moyenne.</p>
          </div>

        </div>
      </div>
      <div class="card">
        <img src="../assets/img/badge1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="usp-text">
            <h3>+10 000 NOUVEAUX <br>MEMBRES PAR MOIS</h3>
            <p>Nombre moyen d'inscriptions <br>mensuelles en Europe en 2020.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5" id="about">
      <div class="row">
        <div class="col-sm-3 mx-auto">
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
                <img src="/assets/img/profils/profil11.jpg" id="photo" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/img/profils/profil2.jpg" id="photo" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/img/profils/profil17.jpg" id="photo" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/img/profils/profil3.jpg" id="photo" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets/img/profils/profil12.jpg" id="photo" class="d-block w-100 img-fluid" alt="...">
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
        <div class="col-sm-7 mx-auto">
          <div class="card card-about">
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
<footer id="Legal_mentions" style="text-align: center; margin-top: 20px;">
		<div class="container-fluid justify-content-center">
			<!--Section mentions légales etc-->
			<p>
				<a data-bs-toggle="collapse" href="#collapseMentions" role="button" aria-expanded="false"
					aria-controls="collapseMentions" class="text-decoration-none" style="color:white">
					Mentions légales
				</a> - <a data-bs-toggle="collapse" href="#collapseCredits" role="button" aria-expanded="false"
					aria-controls="collapseCredits" class="text-decoration-none" style="color:white">
					Crédits
				</a>
			</p>
			<div class="collapse" id="collapseMentions">
				<div class="card card-body pastel">

					<p>
						<h5>Sweet Date</h5>

						Siège social : 10 Place Léon Meyer<br>
						Nom du responsable : DEBRAIZE Raphael & BOINA Zaharat<br>
						Téléphone : 02 35 35 35 35<br>
						Capital social : 50 000€<br>
						N° SIRET : 81542364002478<br>
						Editeur du site : DEBRAIZE Raphael & BOINA Zaharat<br>

						<h5>Conception</h5>
						Le site a été conçu et réalisé par DEBRAIZE Raphael & BOINA Zaharat
          </p>
          
          <p>
            <ol><p>C. PROTECTION DES DONNÉES PERSONNELLES<br></p>
								<p>Conformément à la loi Informatique et Liberté du 6 janvier 1978 (art.34), vous disposez d’un droit d’accès, de rectification ou de suppression concernant les données personnelles que nous pourrions être amenés à recueillir (données renseignées par vous)</p>

								<li><p>CONDITIONS ET RÈGLES GÉNÉRALES D’UTILISATION DU SITE INTERNET ET DES SERVICES PROPOSÉS</p>
									<p>En utilisant le présent site internet, vous reconnaissez avoir lu, compris et accepté les présentes conditions d’utilisation du site et vous vous engagez à les respecter en intégralité et sans restriction.</p>
									
									<p>A. SÉCURITÉ</p>
									<p>Les mentions légales peuvent être modifiées à tout moment, sans préavis et s’imposent à l’utilisateur sans réserve. Le site se réserve aussi le droit de céder, transférer, ce sans préavis les droits et/ou obligations des présences CGU et mentions légales.</p></li>
					
						<li><p>DESCRIPTION DES SERVICES FOURNIS</p>
							<p>Le site a pour objet de fournir une information concernant l’ensemble des activités de la société.
							Toutes les informations proposées sur le site sont données à titre indicatif, sont non exhaustives et sont susceptibles d’évoluer. Elles sont données sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p></li>
						<li><p>LIENS</p>
							<p>Le présent site est susceptible de contenir des liens vers d’autres sites internet, ou d’autres ressources en ligne. Ces liens sont proposés à simple but de complément d’information.
							L’activation de ces liens n’a aucun caractère obligatoire, et l’utilisateur reconnaît les activer à ses propres risques et périls. Il vous appartient en outre de prendre connaissance des conditions d’utilisation particulières relatives à l’utilisation des ces autres sites internet ou ressources en ligne.</p></li>
						<li><p>DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION</p>
							<p>Tout litige en relation avec l’utilisation du site est soumis au droit français. L’utilisateur ainsi que le site acceptent de se soumettre à la compétence exclusive des tribunaux Français en cas de litige.</p></li>	
						<li><p>PROPRIÉTÉ INTELLECTUELLE</p>
							<p>L’éditeur du site détient tous les droits de propriété, notamment intellectuellement, sur le présent site et les éléments qu’il contient (textes, photos, éléments graphiques et multimédia…). Ceci comprend les droits d’utilisation et de reproduction. En conséquence, toute reproduction partielle ou totale du présent du site et des éléments qu’il contient est strictement interdite sans autorisation écrite de l’éditeur du site et constituerait une contrefaçon sanctionnée par le Code de la Propriété Intellectuelle.</p></li>
							<p>
								Les marques, logos, textes et tous autres signes distinctifs contenus sur ce site sont la propriété de l’éditeur du site, ou font l’objet d’une autorisation d’utilisation de la part de leurs propriétaires respectifs. Aucun droit ou licence sur l’un de ces éléments ne sera concédé sans l’autorisation écrite de l’éditeur du site ou du tiers détendeur des droits. Toutes reproduction partielle ou totale de ces marques, logos et autres signes distinctifs effectuée à partir des éléments du site dans notre autorisation expresse est donc strictement prohibée.</p></ol>
          </p>
					
				</div>
			</div>

			<div class="collapse" id="collapseCredits">
				<div class="card card-body pastel">
					Crédits photos : <a href="https://www.pexels.com/fr-fr/"
						target="blank_">Pexels</a>
				</div>
			</div>
		</div>
	</footer>

</html>