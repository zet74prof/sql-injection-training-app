<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SQL Injection</title>

    <link href="./css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>

    <div class="container-narrow">
        <div class="jumbotron">
			<h1 style="color:white">SQL Injection - App d'entrainement</h1>
			<p class="lead" style="color:white">
				Site sensible aux injections SQL
			</p>
        </div>
		<br />
		
      <div class="row marketing">
        <div class="col-lg-6">
          <h4><a href="register.php" style="color:#B31D14">register.php - user registration page</a></h4>
          <p>Cette page peut être utilisée pour créer des utilisateurs afin de s'authentifier sur site</p>

          <h4><a href="login1.php" style="color:#B31D14">login1.php - basic injection page</a></h4>
          <p>Cette page est sensible aux injections SQL. Affiche les erreurs, et peut être utilisée pour contourner l'authentification des utilisateurs</p>

          <h4><a href="searchproducts.php" style="color:#B31D14">searchproducts.php - multiple exercises</a></h4>
            <p>Cette page contient du code qui lit plusieurs entrées de la BDD, et peut être utilisée pour extraire et afficher des données critiques de la base</p>
        </div>


      </div>

      <div class="footer">
		<p>BTS SIO Gabriel Fauré | @siofaure | sio@lycee-faure.fr</p>
      </div>

    </div> <!-- /container -->

  

</body></html>