<!DOCTYPE html>
<html>
<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <title>Se Connecter</title>
</head>
<body>

<h1 class="">Bienvenue à Pôle Travail!</h1>
<p class="">Bon retour parmis nous</p>

<div class="row">
<div class="col s12 m6">
    
<form class="tab card blue-grey darken-1" action="" method="post">
 <p class="card-content white-text">Email : <input class="card-content yellow-text" type="text" name="email" /></p>
 <p class="card-content white-text">Mot de Passe : <input class="card-content yellow-text" type="password" name="password" /></p>
 <p class="card-action"><input class="card-content brown-text" name="submit" type="submit" value="OK" onclick="login()"></p>
</form>
</div>

<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>



<?php

/*
include("database.php");

function login()
{
    $connexion = new database();
    echo "hello:3";

    $sth = $connexion->prepare(
      "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'");
    $sth->query($sth);

    session_start();
    session_destroy();


    $_SESSION["id_user"]=$row["id"];
    $_SESSION["name_user"]=$row["displayname"];
    $_SESSION["role_user"]=$row["role"];

    echo $_SESSION["id_user"];
    echo $_SESSION["name_user"];
    echo $_SESSION["role_user"];
}

if(array_key_exists('submit',$_POST)){
  login();
}
*/
?>