<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paul Emploie</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>



<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbarPersonnalSettings">
    <div class="container">
      <a class="navbar-brand" href="#">Paul emploie</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <?php
session_start();
if (!empty($_SESSION['token']))
{
  echo ("
  <li class="."nav-item".">
  <a class="."nav-link"." href="."createoffer.php".">Déposer une offre</a>
</li>
<li class="."nav-item".">
<a class="."nav-link"." href="."logout.php".">Déconnexion</a>
</li>
  ");
}
else
{
  echo ("
<li class="."nav-item".">
<a class="."nav-link"." href="."connexion.php".">Se connecter</a>
</li>
<li class="."nav-item".">
<a class="."nav-link"." href="."creation.php".">Créer un compte</a>
</li>
  ");
}
?>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <img src="studio.png" alt="" width="100%">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Paul emploie</h1>
          <p class="lead mb-5 text-white-50">Trouvez le travail de vos rêves</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
        <div class="col-md-4 mb-5">
            <form action="sendOffer.php" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nom</label>
                    <input type="text" class="form-control" id="1" name="Name" placeholder="Votre Nom..">
                </div>          
                <div class="form-group">
                  <label for="exampleFormControlInput1">Référence</label>
                  <input type="text" class="form-control" id="2" name="Reference" placeholder="Référence">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" id="3" name="Description" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Période</label>
                  <input type="text" class="form-control" id="4" name="Periode" placeholder="Période">
                </div>       
                <div class="form-group">
                  <label for="exampleFormControlInput1">Date de début</label>
                  <input type="text" class="form-control" id="5" name="Begin_date" placeholder="AAAA-MM-JJ">
                </div>  
                <button class="btn btn-primary" id="Submit" type="submit">Enregistrer</button>
                <button class="btn btn-primary" type="button">Annuler</button>
                
              </form>
              <label for="exampleFormControlInput1"><?php session_start(); echo("id".$_SESSION['id']." !");?></label>
              <label for="exampleFormControlInput1"><?php echo("id".$_SESSION['token']." !");?></label>

        </div>
        <div class="col-md-4 mb-5">            
        </div>
        

    </div>
    
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
?>