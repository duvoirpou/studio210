<?php
session_start();
include('connexionBdd/connexionBdd.php');
include('config_rech_forum.php');
include('modeles/classe_user.php');
	include('modeles/classe_messages.php');
	include('modeles/classe_commentaire.php');
	include('modeles/classe_sujet.php');

?>

<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
		body {
			font-family: Georgia, "Times New Roman", Times, serif;
		}





		.center {
			text-align: center;
		}

		.pagination {
			display: inline-block;
		}

		.pagination a {
			color: black;
			float: left;
			padding: 8px 16px;
			text-decoration: none;
			transition: background-color .3s;
			border: 1px solid #ddd;
			margin: 0 4px;
		}

		.pagination a.active {
			background-color: #DAA520;
			color: white;
			border: 1px solid #DAA520;
		}




		.pagination a:hover:not(.active) {
			background-color: #ddd;
		}
	</style>
</head>

<body id="top">
	<div class="wrapper col1">
		<div id="head">
			<!--<h1><a href="index.html" style="text-decoration: none">Studio 210</a></h1>-->
			<div><img src="images/IMG-20190414-WA0016.jpg" style="width: 100px; height: 100px;" /></div>
			<p></p>
			<div id="topnav">
				<ul>
					<li style=""><a href="index.php?c" style="text-decoration: none">Accueil</a></li>
					<li><a href="#" style="text-decoration: none">Rubriques</a>
						<ul style="width: 152px;">
							<li><a href="R_f_a_f.php" style="text-decoration: none"
									class="sousMenu"><b>Face-&agrave;-face</b></a></li>
							<li><a href="qa.php" style="text-decoration: none" class="sousMenu"><b>Questions
										d'actualit&eacute;</b></a></li>
							<li><a href="jtr.php" style="text-decoration: none" class="sousMenu"><b>Jt religions</b></a>
							</li>
							<li><a href="ea.php" style="text-decoration: none" class="sousMenu"><b>Entretien
										avec</b></a></li>
							<li><a href="aa.php" style="text-decoration: none" class="sousMenu"><b>Arts et
										&acirc;me</b></a></li>
							<li><a href="tr.php" style="text-decoration: none" class="sousMenu"><b>Temps du
										reveil</b></a></li>
							<li><a href="qr.php" style="text-decoration: none" class="sousMenu"><b>Questions
										R&eacute;ponses</b></a></li>

						</ul>

						<ul style="width: 152px; margin-left: 152px; height: 234px">
							<li><a href="id.php" style="text-decoration: none" class="sousMenu"><b>Interview &agrave;
										domicile</b></a></li>

							<li><a href="oracle.php" style="text-decoration: none" class="sousMenu"><b>Oracle</b></a>
							</li>
							<li><a href="pf.php" style="text-decoration: none" class="sousMenu"><b>Parole aux
										femmes</b></a></li>
							<li><a href="gr.php" style="text-decoration: none" class="sousMenu"><b>Grand
										reportage</b></a></li>
							<li><a href="zapping.php" style="text-decoration: none" class="sousMenu"><b>210
										zapping</b></a></li>
							<li><a href="decouverte.php" style="text-decoration: none"
									class="sousMenu"><b>D&eacute;couverte</b></a></li>
							<li><a href="pq.php" style="text-decoration: none" class="sousMenu"><b>Piq&ucirc;re
										d'histoire</b></a></li>

						</ul>
					</li>
					<li><a class="active" href="forum.php" style="text-decoration: none">Forum</a></li>


					<?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a href="?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>



					<li class="last"><a href="gallery.php" style="text-decoration: none">Galeries</a>
						<!--<ul style="width: 106px;" >
            <li ><a href="#" style="width: 106px; text-decoration: none" class="sousMenu"><b>Images</b></a></li>
            <li><a href="gallery.php" style="width: 106px; text-decoration: none" class="sousMenu"><b>Vid&eacute;os</b></a></li>
						</ul>-->
					</li>



					<?php
					include('vues/client/identifiant.php')
				?>


				</ul>
			</div>
			<div id="search" style="">
        <form action="" method="post">
          <fieldset>
            <!--<a href=""><img src="images/AppListIcon.targetsize-20.png" style="position: absolute; margin-left: 250px; margin-top: 5px"/></a>-->
            <input id="go" name="go" type="submit" value="OK" />
            <input type="text" name="rechercher" value="" placeholder="Rechercher le sujet..." />
          </fieldset>
        </form>
      </div>
			<!--<div id="search" style="">
      <form action="#" method="post">
        <fieldset>
          <a href=""><img src="images/AppListIcon.targetsize-20.png" style="position: absolute; margin-left: 250px; margin-top: 5px"/></a>
          <!-<input type="submit" name="go" id="go" value="OK" />->
          <input type="text" value="Recherche&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
        </fieldset>
      </form>
    </div>-->
		</div>
	</div>
	<br>
	<!--<div class="wrapper col2">-->

	<!--</div>-->
	<!-- ####################################################################################################### -->

	<!-- ####################################################################################################### -->
	<div class="wrapper row3" style="margin-top: 120px">
		<div id="container" class="clear">
			<!-- ####################################################################################################### -->
			<div id="homepage" class="clear">
				<!-- ###### -->
				<div id="content" style="width:100%;">

					<?php
	if(isset($_POST['valider'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['pseudo']) AND !empty($_POST['mpass'])){

		$pseudo	= htmlentities(trim($_POST['pseudo']));
		$mpass		= htmlentities(trim($_POST['mpass']));


		$cnxUser = new User (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

		$reponse = $cnxUser->connexionSiteUser($pseudo,$mpass);

		if($reponse){

			//ajout des sessions
						$_SESSION['id_user']		=$reponse->id_user;
						$_SESSION['nom_user']		=$reponse->nom_user;
						$_SESSION['prenom_user']		=$reponse->prenom_user;
						$_SESSION['sexe']		=$reponse->sexe;

						$_SESSION['pseudo']	=$reponse->pseudo;
						$_SESSION['mpass']		=$reponse->mpass;
						$_SESSION['tel']		=$reponse->tel;
						echo "
						<script language='JavaScript'>

						document.location.replace('forum.php');
						</script>
				";
			//header('location:?c=forum');
		}else{
			echo "
                          <script language='JavaScript'>

                          document.location.replace('forum.php');
                          </script>
		                  ";
			//header('location:?c=forum');
		}

	}}






	if(isset($_POST['enregistrer'])){
		if(!empty($_POST['nom_user']) AND !empty($_POST['prenom_user']) AND !empty($_POST['tel']) AND !empty($_POST['pseudo']) AND !empty($_POST['mpass']) AND !empty($_POST['confirm']) AND !empty($_POST['permis']) ){
		if($_POST['mpass']==$_POST['confirm']){



			$nom_user	 = htmlentities(trim($_POST['nom_user']));
			$prenom_user	 = htmlentities(trim($_POST['prenom_user']));
			$sexe	 = htmlentities(trim($_POST['sexe']));
			$tel	 = htmlentities(trim($_POST['tel']));
			$pseudo	 = htmlentities(trim($_POST['pseudo']));
			$mpass	 = htmlentities(trim($_POST['mpass']));
			$photo	= htmlentities(trim($_FILES['photo']['name']));
			$permis	 = htmlentities(trim($_POST['permis']));

		//tmp_name est un dossier temporaire
		$fichierTempo=$_FILES['photo']['tmp_name'];

		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		move_uploaded_file($fichierTempo, 'images/'.$photo);


			$Ins_users = new User (NULL,$nom_user,$prenom_user,$sexe,$tel,$pseudo,$mpass,$photo,$permis);

			$reponse = $Ins_users->ajoutClient();




		if($reponse){
			echo "
                          <script language='JavaScript'>

                          document.location.replace('index?c');
                          </script>
		                  ";
			//header('location:?c');
		}else{
			echo "
                          <script language='JavaScript'>

                          document.location.replace('forum.php');
                          </script>
		                  ";
			//header('location:?c=forum');
		} }}}









	if(isset($_POST['submitform'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){//si ces champs sont remplis -> ligne 33

		$nom		= htmlentities(trim($_POST['nom']));
		$email		= htmlentities(trim($_POST['email']));
		$telephone		= htmlentities(trim($_POST['telephone']));
		$objet		= htmlentities(trim($_POST['objet']));
		$message		= htmlentities(trim($_POST['message']));
		$date_message		= htmlentities(trim($_POST['date_message']));
		$mois_message		= htmlentities(trim($_POST['mois_message']));
		$annee_message		= htmlentities(trim($_POST['annee_message']));

		$AjouterMessages = new Messages (NULL,$nom,$email,$telephone,$objet,$message,$date_message,$mois_message,$annee_message);

		$reponse = $AjouterMessages->ajoutMessages();
	if($reponse){
		echo "
                          <script language='JavaScript'>

                          document.location.replace('forum.php');
                          </script>
		                  ";
			//header('location:?c=forum');
		}else{
			echo "
                          <script language='JavaScript'>

                          document.location.replace('forum.php');
                          </script>
		                  ";
			//header('location:?c=forum');
		}
		}//le msg est envoyé


		}

		$Suj = new Sujets(NULL,NULL,NULL);

		$affSujets = $Suj->affichageSujets();





		$ListSuj = new Sujets(NULL,NULL,NULL);

		$affListSuj = $ListSuj->affichageListeSujets();


	if(isset($_POST['publier'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['commentaire']) AND !empty($_POST['id_user'])){//si ces champs sont remplis -> ligne 33
		$id_sujet		= htmlentities(trim($_POST['id_sujet']));
		$commentaire		= htmlentities(trim($_POST['commentaire']));
		$id_user		= htmlentities(trim($_POST['id_user']));
		$annee_commentaire		= htmlentities(trim($_POST['annee_commentaire']));
		$heure_commentaire		= htmlentities(trim($_POST['heure_commentaire']));
		$minute_commentaire		= htmlentities(trim($_POST['minute_commentaire']));
		$date_commentaire		= htmlentities(trim($_POST['date_commentaire']));



		$AjouterCommentaires = new Commentaires (NULL,$id_sujet,$commentaire,$id_user,$annee_commentaire,$heure_commentaire,$minute_commentaire,$date_commentaire);

		$reponse = $AjouterCommentaires->ajoutCommentaires();
	if($reponse){
		echo "
                          <script language='JavaScript'>

                          document.location.replace('forum.php');
                          </script>
		                  ";
			//header('location:?c=forum');
		}else{
			echo "
                          <script language='JavaScript'>

                          document.location.replace('forum.php');
                          </script>
		                  ";
			//header('location:?c=forum');
		}
		}//le msg est envoyé


		}


		$Commentaires = new Commentaires(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

		$affCommentaires = $Commentaires->affichageCommentaires();

?>

					<h2 style="color: #DAA520; text-align: center"> Sujets du site </h2>
					<div style="text-align: center"><?php while($sjts=$affListSuj->fetch()){?>
						<b><a style="text-decoration: none; margin: 10px;" href="suj.php?code=<?php echo($sjts['id_sujet']) ?>"><?php echo($sjts['sujet'])?></a></b>
						<?php }?> </div>
					<!--<p class="" style="margin-top: 70px; text-align: center"><a style="text-decoration: none;" href="#">Voir tout</a></p>-->


					<div id="latestnews" style="width:100%; padding-top: 50px;">
						<h2 style="color: #DAA520; text-align: center">
							<i><?php for($i=0; $i < count($results->data); $i++) {?>
								<?php $_SESSION['id_sujet']=$results->data[$i]['id_sujet']; $_SESSION['sujet']=$results->data[$i]['sujet']; ?>
								<?php }?></i>
								<?php echo($_SESSION['sujet']) ?>
						</h2>
						<ul>
							<?php
                              	$CommentairesSujets = new Commentaires(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

								$affCommentairesSujets = $CommentairesSujets->affichageCommentairesSujets();
                            ?>

							<?php for($i=0; $i < count($results->data); $i++) {?>
							<li>
								<p class="readmore"><span
										style="float: left"><i><?php echo($results->data[$i]['heure_commentaire'])?>h
											<?php echo($results->data[$i]['minute_commentaire'])?></span><?php echo($results->data[$i]['date_commentaire'])?></i>
								</p>

								<p style="text-align: justify; margin-top: 20px;">
									<img class="imgl" src="images/<?php echo($results->data[$i]['photo'])?>"
										style="border-radius: 100%; " alt="" width="80" height="80" />
									<span><strong><?php echo($results->data[$i]['pseudo'])?></strong></span><br>
									<script>
										var recupe;
										var texte = "<?php echo($results->data[$i]['commentaire'])?>";

										if (texte.length > 501) {
											var posi = texte.substr(0, 501);

											function trouv() {
												return posi;
											}
											recupe = trouv();
											rec = recupe + '&hellip;';
											document.write(rec);
										} else {
											document.write(texte);
										}
									</script>
								</p><br>
								</p>
								<script>
									var texte = "<?php echo($results->data[$i]['commentaire'])?>";
									if (texte.length > 501) {
										document.write(
											'<p class="readmore" style="margin-top: 70px;"><a style="text-decoration: none;" href="index.php?c=affComm&code=<?php $_SESSION['
											id_commentaire '] = $results->data[$i]['
											id_commentaire ']; echo($results->data[$i]['
											id_commentaire '])?>">Lire tout &raquo;</a></p>');
									} else {
										document.write('<p class="readmore" style="margin-top: 70px;">&nbsp;</p>');
									}
								</script>
							</li><?php }?>

						</ul>
					</div>
					<?php
				if(isset($_SESSION['nom_user']) OR isset($_SESSION['id_sujet'])){
					$tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
					$date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
											 $mois = $tab_mois[date("n")];
					$d = date('j').' '.$mois.' '.date('Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';


          //$d = date('j M Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
                //$mois = date('M');
                $annee = date('Y');
                $heure = date('H');
                $minute = date('i'); $date_comment = date('j M Y');
				echo '
        <p>
          <form action="" method="post">
          <input type="number" name="id_sujet" placeholder="id_user" value="'.$_SESSION['id_sujet'].'" hidden/>

          <textarea id="message" name="commentaire" cols="40" rows="4" placeholder="Commenter..."></textarea>
          <input type="number" name="id_user" placeholder="id_user" value="'.$_SESSION['id_user'].'" hidden/>
          <input type="number" name="annee_commentaire" placeholder="annee_commentaire" value="'.$annee.'" hidden/>
          <input type="text" name="heure_commentaire" placeholder="heure_commentaire" value="'.$heure.'" hidden/>
          <input type="text" name="minute_commentaire" placeholder="minute_commentaire" value="'.$minute.'" hidden/>
          <input type="text" name="date_commentaire" placeholder="minute_commentaire" value="'.$date_jour.'" hidden/>



          <input class="button btn btn-default" type="submit" name="publier" value="Publier" style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;"/>
          </form>
        </p>
        <p></p>

        ';}
			?>
					<?php
                if(!isset($_SESSION['nom_user']))
                echo '<p><strong>Connectez-vous pour pouvoir participer au forum</strong></p> <p class="" style="width: 200px;"><a style="text-decoration: none; width: 200px;" href="?c=compte"><button style="background: #DAA520; color: #B22222; margin-top: 20px; width: 200px;" type="button" class="btn  btn-lg btn-block">Cliquez ici</button></a></p>';
					?>
				</div>


				<div class="center">
					<?php
        echo $paginator->createLinks($links);
      ?>

				</div>



			</div>
			<!-- ###### -->
		</div>
		<!-- ####################################################################################################### -->
	</div>

	</div>
	<!-- ####################################################################################################### -->
	<div class="wrapper col5">
		<?php
		include ('vues/client/footer2.php')
	?>
	</div>
	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
	<!--<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>-->
	<script src="js/all.js"></script>

	<!-- jquery
<script src="assets/jquery.js"></script>-->

	<!-- wow script
<script src="assets/wow/wow.min.js"></script>-->


	<!-- boostrap -->
	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

	<!-- jquery mobile -->
	<script src="assets/mobile/touchSwipe.min.js"></script>
	<!--<script src="assets/respond/respond.js"></script>-->

	<!-- gallery
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>-->

	<!-- custom script
<script src="assets/script.js"></script>-->
	<!-- / Homepage Specific -->
</body>

</html>