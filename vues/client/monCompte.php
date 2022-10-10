<?php
if(isset($_SESSION['inscrit']) AND isset($_POST['enregistrer'])){
$cnom = 'inscrit';

$cvaleur = $_SESSION['inscrit'];
} else{
    $cnom = 'inscrit';

$cvaleur = '';
  }
setcookie($cnom, $cvaleur, time() + 3600);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Studio 210</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

<link rel="stylesheet" href="css/styles/layout.css" type="text/css" />

<link rel="stylesheet" href="css/all.css" />


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
            <li ><a href="R_f_a_f.php" style="text-decoration: none" class="sousMenu"><b>Face-&agrave;-face</b></a></li>
            <li><a href="qa.php" style="text-decoration: none" class="sousMenu"><b>Questions d'actualit&eacute;</b></a></li>
            <li><a href="jtr.php" style="text-decoration: none" class="sousMenu"><b>Jt religions</b></a></li>
						<li><a href="ea.php" style="text-decoration: none" class="sousMenu"><b>Entretien avec</b></a></li>
						<li><a href="aa.php" style="text-decoration: none" class="sousMenu"><b>Arts et &acirc;me</b></a></li>
						<li><a href="tr.php" style="text-decoration: none" class="sousMenu"><b>Temps du reveil</b></a></li>
						<li><a href="qr.php" style="text-decoration: none" class="sousMenu"><b>Questions R&eacute;ponses</b></a></li>

          </ul>

          <ul style="width: 152px; margin-left: 152px; height: 234px" >
            <li><a href="id.php" style="text-decoration: none" class="sousMenu"><b>Interview &agrave; domicile</b></a></li>

            <li><a href="oracle.php" style="text-decoration: none" class="sousMenu"><b>Oracle</b></a></li>
						<li><a href="pf.php" style="text-decoration: none" class="sousMenu"><b>Parole aux femmes</b></a></li>
						<li><a href="gr.php" style="text-decoration: none" class="sousMenu"><b>Grand reportage</b></a></li>
						<li><a href="zapping.php" style="text-decoration: none" class="sousMenu"><b>210 zapping</b></a></li>
						<li><a href="decouverte.php" style="text-decoration: none" class="sousMenu"><b>D&eacute;couverte</b></a></li>
						<li><a href="pq.php" style="text-decoration: none" class="sousMenu"><b>Piq&ucirc;re d'histoire</b></a></li>

          </ul>
        </li>
        <li><a  href="index.php?c=forum" style="text-decoration: none">Forum</a></li>

        <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a class="active" href="index.php?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>



<li class="last"><a  href="gallery.php" style="text-decoration: none">Galeries</a>
						<!--<ul style="width: 106px;" >
            <li ><a href="#" style="width: 106px; text-decoration: none" class="sousMenu"><b>Images</b></a></li>
            <li><a href="gallery.php" style="width: 106px; text-decoration: none" class="sousMenu"><b>Vid&eacute;os</b></a></li>
						</ul>-->
				</li>

        <?php
				if(isset($_SESSION['nom_user'])){
				echo '<li><a href="?c=dcx_client" style="text-decoration: none"><b>déconnexion</b></a></li>';}
			?>
				<!--<li><a href="#" style="text-decoration: none">Connexion</a>
						<ul style="width: 152px;" >
            <li ><a href="#" style="text-decoration: none" class="sousMenu"><b>Forum connexion</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Forum inscription</b></a></li>
						</ul>
				</li>-->

			</ul>
    </div>

  </div>
</div>
<br>
<!--<div class="wrapper col2">-->

<!--</div>-->
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
	<div class="wrapper row3" style="margin-top: 50px">
			<div id="container" class="clear">
				<!-- ####################################################################################################### -->
				<div id="homepage" class="">
					<!-- ###### -->

								<h3 style="text-align: center">Connectez-vous si vous avez déjà un compte. Si vous ne possédez pas de compte veuillez vous inscrire dans le formulaire d'inscription (second formulaire) plus bas,
                ensuite connectez-vous avec votre pseudo et votre mot de passe dans le formulaire de connexion (premier formulaire).</h3>



						<div class="holder last" id="rubrique" style="text-align: center;">
							<h2 style="margin-top: 60px; color: #DAA520; border: none"><!--Etudiant &amp; -->Se connecter</h2>
							<ul class="staffmembers">
								<li class="clear" style="border: none">
									<div class="" style="">
                    <form action="" method="post">

                      <div class="form-group">
                <div class="row">
									<div class="col-sm-6">
										<input type="text" name="pseudo" placeholder="pseudo" class="form-control"/>
									</div>
									<div class="col-sm-6">
                    <input type="password" name="mpass" placeholder="Mot de passe" class="form-control"/>
									</div>
								</div>
							</div>

                      <!--<p><label></label></p>
                      <p><label></label></p>-->
                      <p><input class="button btn btn-default" name="valider" type="submit" value="Connexion" style="background: #DAA520; color: #B22222; margin-top: 20px"/></p>
                      <p>&nbsp;</p>
                    </form>
									</div>
								</li>

							</ul>
						</div>

            <div class="holder last" id="rubrique" style="text-align: center;">
							<h2 style="margin-top: 20px; color: #DAA520; border: none"><!--Etudiant &amp; -->S'inscrire</h2>
							<ul class="staffmembers">
								<li class="clear" style="border: none">
									<div class="" style="">  <!--TRES IMPORTANT "multipart/form-data" -->
                    <form action="" method="post" enctype="multipart/form-data">

                      <?php

			if(isset($_POST['enregistrer'])){
			if(!empty($_POST['nom_user']) AND !empty($_POST['prenom_user']) AND !empty($_POST['sexe']) AND !empty($_POST['tel']) AND !empty($_POST['pseudo']) AND !empty($_POST['mpass']) AND !empty($_POST['confirm']) AND !empty($_POST['permis']) ){
				if($_POST['mpass']==$_POST['confirm']){
			echo'<script> alert("Inscription effectuée avec succès"); </script>';


			} else{ echo'<script> alert("Veuillez bien confirmer votre mot de passe"); </script>'; }	}	else{
						echo'<script> alert("Le remplissage de tous les champs du formulaire d\'inscripstion est obligatoire sauf pour la photo. Merci !"); </script>';
						}
				}
			?>

              <div id="erreur" style="display: none">
<p>Vous n'avez pas rempli correctement les champs du formulaire !</p>

</div>
              <p style="color: green;"><?php if(isset($_COOKIE[$cnom])){ echo '<script> alert("'.$_COOKIE[$cnom].'"); </script>'; } ?></p>
              <div class="form-group">
                <div class="row">
									<div class="col-sm-6">
										<input required type="text" name="nom_user" placeholder="Nom" id="nom" class="form-control champ" />
									</div>
									<div class="col-sm-6">
                    <input required type="text" name="pseudo" placeholder="Pseudo" id="pseudo" class="form-control champ" />

									</div>
								</div>
							</div>
							<div class="form-group">
                <div class="row">
									<div class="col-sm-6">
                    <input required type="text" name="prenom_user" placeholder="Prénom" id="prenom" class="form-control champ" />
									</div>
									<div class="col-sm-6">
                    <input required type="password" name="mpass" placeholder="Mot de passe (de préférence plus de 5 caractères)" id="mpass" class="form-control champ long" />
									</div>
								</div>
							</div>
              <div class="form-group">
                <div class="row">
									<div class="col-sm-6">


                     <select required name="sexe" class="form-control champ" id="sexe" style="color:black;" >

                          <!--<optgroup label="">-->
                            <option value="">Sexe</option>

                            <option value="M">M</option>
                            <option value="F">F</option>


                          <!--</optgroup>-->

                      </select>


									</div>
									<div class="col-sm-6">
                    <input required type="password" name="confirm" id="confirm" placeholder="Confirmez le mot de passe" class="champ form-control"/>
									</div>
								</div>
							</div>
							<div class="form-group">
                <div class="row">
									<div class="col-sm-6">
                    <input required type="phone" name="tel" placeholder="Télephone" id="tel" class="form-control champ" />
									</div>

									<div class="col-sm-6">
                    <div required class="col-sm-2"><label>Photo</label></div><div class="col-sm-10"><input style="" type="file" name="photo" class="form-control-file"/></div>
									</div>
								</div>
							</div>



                      <p><label></label></p>

                      <p><input type="number" name="permis" value="1" placeholder="permis" hidden/></p>
                      <p><input id="envoi" class="button btn btn-default" type="submit" name="enregistrer" value="Inscription" style="background: #DAA520; color: #B22222; margin-top: 20px"/></p>
                      <p><input type="reset" class="button btn btn-default" id="rafraichir" value="Rafraîchir" /></p>
                      <p>&nbsp;</p>
                    </form>
									</div>
								</li>

							</ul>
						</div>




					<!-- ###### -->

					<!-- ###### -->
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
<script>

  $(document).ready(function(){
// notre code ici

  var $pseudo = $('#pseudo'),
  $nom = $('#nom'),
  $prenom = $('#prenom'),

$mpass = $('#mpass'),
$confirm = $('#confirm'),
$tel = $('#tel'),
$sexe = $('#sexe'),
$envoi = $('#envoi'),
$reset = $('#rafraichir'),
$erreur = $('#erreur'),
$champ = $('.champ');
  $long = $('.long');


  $long.keyup(function(){
if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
$(this).css({ // on rend le champ rouge
borderColor : 'red',
color : 'red'
});
} else{
$(this).css({ // si tout est bon, on le rend vert
borderColor : 'green',
color : 'green'
});
}
});





  $confirm.keyup(function(){
if($(this).val() != $mpass.val()){ // si la confirmation est différente du mot de passe
$(this).css({ // on rend le champ rouge
borderColor : 'red',
color : 'red'
});
} else{
$(this).css({ // si tout est bon, on le rend vert
borderColor : 'green',
color : 'green'
});
}
});




  function verifier(champ){
if(champ.val() == ""){ // si le champ est vide
$erreur.css('display', 'block'); // on affiche le message d'erreur
champ.css({ // on rend le champ rouge
borderColor : 'red',
color : 'red'
});
} else{ <?php $inscrit = "Vous avez créé un compte, veuillez vous connecter à présent !"; $_SESSION['inscrit'] = $inscrit; ?> }
}


  $envoi.click(function(e){

// puis on lance la fonction de vérification sur tous les champs :
verifier($pseudo);
verifier($nom);
verifier($prenom);
verifier($mpass);
verifier($confirm);
verifier($tel);
verifier($sexe);
});



  $reset.click(function(){
$champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
borderColor : '#ccc',
color : '#555'
});
$erreur.css('display', 'none'); // on prend soin de cacher le message d'erreur
});



  });

</script>



<script src="js/all.js"></script>






<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>


</body>
</html>