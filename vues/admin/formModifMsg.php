<?php
	if(!$_SESSION['id_admin']){
		header('location:?c=admin');
	}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Studio 210</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

<link rel="stylesheet" href="css/styles/layout.css" type="text/css" />

<link rel="stylesheet" href="css/all.css" />

<!--<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>-->

<link rel="stylesheet" href="responsive.css" type="text/css" />
<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css" />

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<style>

body{
		font-family:Georgia, "Times New Roman", Times, serif;
	}

</style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="head">
    <!--<h1><a href="index.html" style="text-decoration: none">Studio 210</a></h1>-->
		<div ><img src="images/IMG-20190414-WA0016.jpg" style="width: 100px; height: 100px;" /></div>
    <p></p>
    <div id="topnav">
		<ul>
         <li ><a href="?c=espadmin">Accueil</a></li>
                <li class=""><a href="?c=affMbre" style="text-decoration: none;">Users</a></li>
								<li ><a class="active" href="?c=msg" style="text-decoration: none;">Messages</a></li>
								<li class=""><a href="?c=ajSuj" style="text-decoration: none;">sujet au forum</a></li>
								<li class=""><a href="#" style="text-decoration: none;">Vidéos</a>
									<ul style="width: 152px;" >
									<li ><a href="?c=insV" style="text-decoration: none" class="sousMenu"><b>Ajouter</b></a></li>
									<li><a href="?c=videos" style="text-decoration: none" class="sousMenu"><b>Voir par rubrique</b></a></li>
									</ul>
								</li>
                <li class=""><a href="?c=dcnx_ad" style="text-decoration: none;"><b>Déconnexion</b></a></li>


			</ul>
    </div>

  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
    <div id="container" class="clear">



				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Message de <span class="text-danger"><?php echo($messages['nom'])?></span> le <span class="text-danger"><?php echo($messages['date_message'])?></span></h5>
						<form method="POST" action="" enctype="multipart/form-data">

					<div class="form-group" hidden>
						<input type="text" name="id_messages" value ="<?php echo($messages['id_messages'])?>" class="form-control" readonly/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">Nom : </label>
						<input type="text" name="nom" value ="<?php echo($messages['nom'])?>" class="form-control" readonly/>
					</div>

					<div class="form-group" >
						<label class="control-label">Email : </label>
						<input type="text" name="email" value ="<?php echo($messages['email'])?>" class="form-control" readonly/>
					</div>

					<div class="form-group" >
						<label class="control-label">tel : </label>
						<input type="text" name="telephone" value ="<?php echo($messages['telephone'])?>" class="form-control" readonly/>
					</div>

					<div class="form-group" >
						<label class="control-label">objet : </label>
						<input type="text" name="objet" value ="<?php echo($messages['objet'])?>" class="form-control" readonly/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">date : </label>
						<input type="text" name="date_message" value ="<?php echo($messages['date_message'])?>" class="form-control" readonly/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">mois : </label>
						<input type="text" name="mois_message" value ="<?php echo($messages['mois_message'])?>" class="form-control" readonly/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">annee : </label>
						<input type="text" name="annee_message" value ="<?php echo($messages['annee_message'])?>" class="form-control" readonly/>
					</div>

					<div class="form-group" >
					<textarea id="message" value ="<?php echo($messages['message'])?>" name="message" cols="40" rows="4" hidden></textarea>
						<p class="text-justify"><?php echo($messages['message'])?></p>
					</div>






					<div hidden>
						<button type="submit" name="modifMsg">OK</button>
					</div>
				</form>
					</div>
				</div>





        <!-- ####################################################################################################### -->
    </div>
</div>
<!-- ####################################################################################################### -->

</body>
</html>