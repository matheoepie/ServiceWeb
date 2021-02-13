<!DOCTYPE html>
<html>
<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="offerlist.css" rel="stylesheet" type="text/css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> 
    </script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> 
    </script> 

      <title>Ajouter une offre</title>
</head>
<body>

<div class="row">
<div class="col s12 m5">
<div class="card-panel">
<h4 class="red-text">Bienvenue à Pôle Travail!</h4>
</div>
</div>
</div>

<a class="waves-effect waves-light btn black-text">Nouvelle Offre</a> | <a class="waves-effect waves-light btn black-text">Déconnexion</a>

<ul class="collection">
        <li href="#">
            <a class="collection-item">
                Offre 1
            </a>
            <div>
                <p>
                    Ceci est une offre du TURFU!
                </p>
            </div>
        </li>
        <li href="#">
            <a class="collection-item">
                Offre 2
            </a>
            <div>
                <p>
                    Ceci est une offre du TURFU!
                </p>
            </div>
        </li><li href="#">
            <a class="collection-item">
                Offre 3
            </a>
            <div>
                <p>
                    Ceci est une offre du TURFU!
                </p>
            </div>
        </li><li href="#">
            <a class="collection-item">
                Offre 4
            </a>
            <div>
                <p>
                    Ceci est une offre du TURFU!
                </p>
            </div>
        </li>
</ul>


<script> 
        $(document).ready(function() { 
            $('a').click(function() { 
                $('a.collection-item.active').next().hide();
                $('a.collection-item.active').removeClass("active");
                $(this).addClass("active");
                $('a.collection-item.active').next().show();
            }); 
        });
    </script> 

</body>
</html>