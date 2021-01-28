<?php require("controllers/index_controller.php");?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sweet Date</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/assets/img/fav.ico">


</head>

<body>
<div class="row row1 justify-content-start"> 
<div class="col-3" >
<img class="" id="logo" src="/assets/img/logo1.png"/>
</div>
</div>

<div class="row row1 justify-content-end "> 
    <div class="col-3" >
    <button type="button" class="btn1 justify-content-center  "><a class="connexion" href="/views/user.php">Se connecter</a></button>
    </div>

</div>
  <div class="header-home">
    <h1 class="title text-center align-center">SWEET DATE</h1>
    <div class="container">

    <div class="row d-flex mt-5">
      <div class="col offset-2">
      <div class="card m-3 " style="width: 28rem;">

        <div class="card-body cardindex">
        <form action="index.php" method="post">
          <p class="card-text slogan">Il est temps de rencontrer votre moitié.</p>
          <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="homme" name="choice" value="homme">Vous recherchez un homme</a>
          <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="femme" name="choice" value="femme">Vous recherchez une femme</a>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Inscrivez-vous !</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
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
                    
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="choice" id="choice">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="confirm" name="confirm" class="btn btn-primary">Save changes</button>
                </div>
                
              </div>
            </div>
          </div>

          
        </div>
        </form>
      </div>
    </div>
    <?php 

    
  
?>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script>
  const homme = document.getElementById('homme');
  const choice = document.getElementById('choice');
  homme.addEventListener('click', function(){
    choice.value = 'homme';
  })
  
  const femme = document.getElementById('femme');
  femme.addEventListener('click', function(){
    choice.value = 'femme';
  })

  </script>
</body>

</html>