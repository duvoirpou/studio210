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

<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>

<link rel="stylesheet" href="responsive.css" type="text/css" />
<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

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
         <li class=""><a href="?c=espadmin">Accueil</a></li>
                <li class=""><a href="?c=affMbre" style="text-decoration: none;">Users</a></li>
								<li class=""><a href="?c=msg" style="text-decoration: none;">Messages</a></li>
								<li ><a class="active" href="?c=ajSuj" style="text-decoration: none;">sujet au forum</a></li>
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
		<div class="container" style="margin-top:150px;">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
 					<button type="button" class="btn btn-primary btn-lg btn-block">Ajouter un sujet</button>
				</div>
				<div class="col-md-4"></div>
			</div>

			<form style="margin-top:30px;" method="POST" action="" enctype="multipart/form-data">


				<div class="form-group">
					<label for="message">Message :<br />
                <textarea name="sujet" id="sujet" placeholder="sujet du forum" cols="40" rows="4"></textarea>
              </label>
				</div>


				<!--<div class="form-group">
					<label for="rubrique">Rubrique</label>
					<select name="rubrique" style="color:black">

									<optgroup label="type de compte">
										<option ></option>

										<option>Face-à-face</option>
										<option>Questions d'actualité</option>
										<option >Jt religions</option>
										<option >Entretien avec</option>
										<option >Arts et âme</option>
										<option >Temps du reveil</option>
										<option >Questions Réponses</option>
										<option >Interview à domicile</option>
										<option >Oracle</option>
										<option >Parole aux femmes</option>
										<option >Grand reportage</option>
										<option >210 zapping</option>
										<option >Découverte</option>
										<option >Piqure d'histoire</option>


									</optgroup>





				</select></div>-->

				<?php
				$tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
				$date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
										 $mois = $tab_mois[date("n")];
				$d = date('j').' '.$mois.' '.date('Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
				$date_sujet = date('j M Y');
				 ?>

				<div class="form-group">
					<label for="date_sujet">Date</label>
					<input type="text" class="form-control" name="date_sujet" id="date_sujet" placeholder="" value="<?php echo $date_jour; ?>"/>
				</div>







				<button type="submit" class="btn btn-default" name="enregistrer">Enregistrer</button>
			</form>
		</div>




  <!------------------------------------------>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.js"></script>
	</body>
</html>