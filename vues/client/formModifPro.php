<?php
	if(!$_SESSION['id_user']){
		header('location:?c');
	}
?>

<?php
if(isset($_SESSION['inscrit'])){
$cnom = 'inscrit';

$cvaleur = $_SESSION['inscrit'];

setcookie($cnom, "", time() - 3600 * 24);
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
        <li style=""><a  href="?c" style="text-decoration: none">Accueil</a></li>
				<li><a href="#" style="text-decoration: none">Rubriques</a>
        <ul style="width: 152px;" >
            <li ><a href="?c=R_f_a_f" style="text-decoration: none" class="sousMenu"><b>Face-à-face</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Questions d'actualité</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Jt religions</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Entretien avec</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Arts et âme</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Temps du reveil</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Questions Réponses</b></a></li>
						
						
						
						
						
          </ul>
          
          <ul style="width: 152px; margin-left: 152px; height: 234px" >
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Interview à domicile</b></a></li>
						
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Oracle</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Parole aux femmes</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Grand reportage</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>210 zapping</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Découverte</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Piqure d'histoire</b></a></li>
						
          </ul>
        </li>
        <li><a href="?c=forum" style="text-decoration: none">Forum</a></li>
        
        
        <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a href="?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>
        
        
        
        <li class="last"><a href="#" style="text-decoration: none">Galeries</a>
						<ul style="width: 106px;" >
            <li ><a href="#" style="width: 106px; text-decoration: none" class="sousMenu"><b>Images</b></a></li>
            <li><a href="?c=gal" style="width: 106px; text-decoration: none" class="sousMenu"><b>Vid&eacute;os</b></a></li>
						</ul>
				</li>
				
        
         
        <?php
				include('identifiant.php');
        
			?>
				<!--<li><a href="#" style="text-decoration: none">Connexion</a>
						<ul style="width: 152px;" >
            <li ><a href="#" style="text-decoration: none" class="sousMenu"><b>Forum connexion</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Forum inscription</b></a></li>
						</ul>
				</li>-->
					
			</ul>
    </div>
    <div id="search" style="">
      <form action="#" method="post">
        <fieldset>
          <a href=""><img src="images/AppListIcon.targetsize-20.png" style="position: absolute; margin-left: 250px; margin-top: 5px"/></a>
          <!--<input type="submit" name="go" id="go" value="OK" />-->
          <input type="text" value="Recherche&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
        </fieldset>
      </form>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
    <div id="container" class="clear">
        <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
		
		  <div class="panel panel-default">
		  
			<div class="panel-heading"><?php echo($user['prenom_user'])?> <?php echo($user['nom_user'])?></div>
				
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
						<label class="control-label">sexe : </label>
						<input type="text" name="sexe" value ="<?php echo($user['sexe'])?>" class="form-control"/>
					</div>
					
					<div class="form-group" >
						<label class="control-label">tel : </label>
						<input type="text" name="tel" value ="<?php echo($user['tel'])?>" class="form-control"/>
					</div>
					
					<div class="form-group" >
						<label class="control-label">pseudo : </label>
						<input type="text" name="pseudo" value ="<?php echo($user['pseudo'])?>" class="form-control"/>
					</div>
					
					<div class="form-group" hidden>
						<label class="control-label">password : </label>
						<input type="password" name="mpass" value ="<?php echo($user['mpass'])?>" class="form-control"/>
					</div>
					
					<div class="form-group" >
						<label class="control-label">Photo : </label>
						<input type="file" name="photo" class="form-control-file"/>
						<img src="images/<?php echo($user['photo']) ?>" style="width:80px;height:85px;"/>
					</div>
					
					<div class="form-group" hidden>
						<label class="control-label"><?php if($user['permis']==0){ echo 'Il est bloqué; voulez-vous le débloquer ?' ; }else{echo 'Voulez-vous le bloquer ?' ;}?> </label>
						<select class="field small-field" id="permis" name="permis" style="width:100px">
						
						<option value="<?php echo($user['permis'])?>">Non</option>
						<?php if($user['permis']==1) echo '<option value="0">Oui</option>'?>
						<?php if($user['permis']==0) echo '<option value="1">Oui</option>'?>
						
						</select>
					</div>
					
					
					
					<div>
						<button type="submit" name="modif" onclick="return confirm('Confirmer ?');">Modifier</button>
					</div>
				</form>	
			</div>
			</div>
			<h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
		</div>
		
        <!-- ####################################################################################################### -->
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
    <?php 
		include ('footer2.php')
	?>
</div>


<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>

<script src="js/all.js"></script>





<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

</body>
</html>