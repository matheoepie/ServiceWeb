<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paul emploie</title>

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
<a class="."nav-link"." id=\"logout\" href="."logout.php".">Déconnexion</a>
</li>
  ");
}
else
{
  echo ("
<li class="."nav-item".">
<a class="."nav-link"." id=\"connect\" href="."connexion.php".">Se connecter</a>
</li>
<li class="."nav-item".">
<a class="."nav-link"." id=\"create\" href="."creation.php".">Créer un compte</a>
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

<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://127.0.0.1:8000/Offers/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$response = json_decode($response, true); //because of true, it's in an array
foreach ($response as $v) {
    echo '<div class="col-md-4 mb-5"><div class="card h-100"><div class="card-body"><h4 class="card-title">'.$v['Name'].'</h4><p class="card-text">'.$v['Description'].'</p></div><div class="card-footer"><a href="#" class="btn btn-primary">Détail</a></div></div></div>';
}


?>
</body>
</html>

