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
         <li ><a href="?c=espadmin">Accueil</a></li>

                <li ><a class="active" href="?c=affMbre" style="text-decoration: none;">Users</a></li>
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
<!-- ####################################################################################################### -->
<div class="wrapper row3">
    <div id="container" class="clear">
        <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">

		  <div class="panel panel-default">

			<div class="panel-heading">EDITER</div>

			<div class="panel-body">
				<form method="POST" action="" enctype="multipart/form-data">

					<div class="form-group" hidden>
						<input type="text" name="id_user" value ="<?php echo($user['id_user'])?>" class="form-control"/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">Nom : </label>
						<input type="text" name="nom_user" value ="<?php echo($user['nom_user'])?>" class="form-control"/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">prenom : </label>
						<input type="text" name="prenom_user" value ="<?php echo($user['prenom_user'])?>" class="form-control"/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">tel : </label>
						<input type="text" name="tel" value ="<?php echo($user['tel'])?>" class="form-control"/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">pseudo : </label>
						<input type="text" name="pseudo" value ="<?php echo($user['pseudo'])?>" class="form-control"/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">password : </label>
						<input type="password" name="mpass" value ="<?php echo($user['mpass'])?>" class="form-control"/>
					</div>

					<div class="form-group" hidden>
						<label class="control-label">Photo : </label>
						<input type="file" name="photo" class="form-control"/>
						<img src="<?php echo($user['photo']) ?>" style="width:80px;height:85px;"/>
					</div>

					<div class="form-group" >
						<label class="control-label"><?php if($user['permis']==0){ echo 'Il est bloqué; voulez-vous le débloquer ?' ; }else{echo 'Voulez-vous le bloquer ?' ;}?> </label>
						<select class="field small-field" id="permis" name="permis" style="width:100px">

						<option value="<?php echo($user['permis'])?>">Non</option>
						<?php if($user['permis']==1) echo '<option value="0">Oui</option>'?>
						<?php if($user['permis']==0) echo '<option value="1">Oui</option>'?>

						</select>
					</div>



					<div>
						<button type="submit" name="modif">OK</button>
					</div>
				</form>
			</div>
			</div>
		</div>

        <!-- ####################################################################################################### -->
    </div>
</div>
<!-- ####################################################################################################### -->

</body>
</html>