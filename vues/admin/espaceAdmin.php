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
         <li ><a class="active" href="?c=espadmin" style="text-decoration: none;">Accueil</a></li>
                <li class=""><a href="?c=affMbre" style="text-decoration: none;">Users</a></li>
								<li class=""><a href="?c=msg" style="text-decoration: none;">Messages</a></li>
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

<div id="container" class="clear">
<div class="card" style="border: none">

	<div class="card-body">
		<h4 class="card-title text-center" style="color: #000;"><?php echo $_SESSION['nom_admin']; ?>, bienvenue dans votre espace de travail.</h4>
		<!--<p class="card-text">Text</p>-->
	</div>
</div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->

</body>
</html>