<?php
if(isset($_SESSION['inscrit'])){
$cnom = 'inscrit';

$cvaleur = $_SESSION['inscrit'];

setcookie($cnom, "", time() - 3600 * 24);
}
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


		#home {
			position: relative;
			height: 1000px;
			overflow-y: scroll;
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
					<li style=""><a href="?c" style="text-decoration: none">Accueil</a></li>
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
					<li><a class="active" href="index.php?c=forum" style="text-decoration: none">Forum</a></li>


					<?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a href="?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>



<li class="last"><a  href="gallery.php" style="text-decoration: none">Galeries</a>
						<!--<ul style="width: 106px;" >
            <li ><a href="#" style="width: 106px; text-decoration: none" class="sousMenu"><b>Images</b></a></li>
            <li><a href="gallery.php" style="width: 106px; text-decoration: none" class="sousMenu"><b>Vid&eacute;os</b></a></li>
						</ul>-->
				</li>



					<?php
					include('identifiant.php')
				?>


				</ul>
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
		<div id="search" style="">
				<form action="" method="post">
					<fieldset>
						<!--<a href=""><img src="images/AppListIcon.targetsize-20.png" style="position: absolute; margin-left: 250px; margin-top: 5px"/></a>-->
						<input id="go" name="go" type="submit" value="OK" />
						<input type="text" name="rechercher" value="" placeholder="Rechercher le sujet..." />
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<br>
	<!--<div class="wrapper col2">-->

	<!--</div>-->
	<!-- ####################################################################################################### -->

	<!-- ####################################################################################################### -->
	<div class="wrapper row3" style="margin: 0 auto; width: 1000px; padding-top: 50px" id="home" data-spy="scroll" data-target="#navbar-example">
		<div id="container" class="clear" id="navbar-example">
			<!-- ####################################################################################################### -->
			<div id="homepage" class="clear">
				<!-- ###### -->
				<div id="content" style="width:100%;">


					<h2 style="color: #DAA520; text-align: center"> Sujets du site </h2>
					<div style="text-align: center"><?php while($sjts=$affListSuj->fetch()){?>
						<b><a style="text-decoration: none; margin: 10px;"
								href="?c=affSuj&code=<?php echo($sjts['id_sujet']) ?>"><?php echo($sjts['sujet'])?></a></b>
						<?php }?></div>
					<!--<p class="" style="margin-top: 70px; text-align: center"><a style="text-decoration: none;" href="#">Voir tout</a></p>-->


					<div id="latestnews" style="width:100%; padding-top: 50px;">
						<h2 style="color: #DAA520; text-align: center">
							<i><?php while($sjt=$affSujets->fetch()){?>
								<?php $_SESSION['id_sujet']=$sjt['id_sujet']; echo($sjt['sujet'])?>
								<?php }?></i>
						</h2>
						<ul>
							<?php
                              	$CommentairesSujets = new Commentaires(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

								$affCommentairesSujets = $CommentairesSujets->affichageCommentairesSujets();
                            ?>

							<?php while($comm=$affCommentairesSujets->fetch()){?>
							<li>
								<p class="readmore"><span
										style="float: left"><i><?php echo($comm['heure_commentaire'])?>h
											<?php echo($comm['minute_commentaire'])?></span><?php echo($comm['date_commentaire'])?></i>
								</p>

								<p style="text-align: justify; margin-top: 20px;">
									<img class="imgl" src="images/<?php echo($comm['photo'])?>"
										style="border-radius: 100%; " alt="" width="80" height="80" />
									<span><strong><?php echo($comm['pseudo'])?></strong></span><br>
									<?php echo($comm['commentaire'])?>
									<script>
										/*var recupe;
										var texte = "<?php echo($comm['commentaire'])?>";

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
										}*/
									</script>
								</p>
								<br>
								<script>
									/*var texte = "<?php echo($comm['commentaire'])?>";
									if (texte.length > 501) {
										document.write(
											'<p class="readmore" style="margin-top: 70px;"><a style="text-decoration: none;" href="?c=affComm&code=<?php $_SESSION['
											id_commentaire '] = $comm['
											id_commentaire ']; echo($comm['
											id_commentaire '])?>">Lire tout &raquo;</a></p>');
									} else {
										document.write('<p class="readmore" style="margin-top: 70px;">&nbsp;</p>');
									}*/
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


          <input type="number" name="id_user" placeholder="id_user" value="'.$_SESSION['id_user'].'" hidden/>
          <input type="number" name="annee_commentaire" placeholder="annee_commentaire" value="'.$annee.'" hidden/>
          <input type="text" name="heure_commentaire" placeholder="heure_commentaire" value="'.$heure.'" hidden/>
          <input type="text" name="minute_commentaire" placeholder="minute_commentaire" value="'.$minute.'" hidden/>
          <input type="text" name="date_commentaire" placeholder="minute_commentaire" value="'.$date_jour.'" hidden/>





        </p>
        <p></p>

        ';}
			?>
					<?php
                if(!isset($_SESSION['nom_user']))
                echo '<p><strong>Connectez-vous pour pouvoir participer au forum</strong></p> <p class="" style="width: 200px;"><a style="text-decoration: none; width: 200px;" href="?c=compte"><button style="background: #DAA520; color: #B22222; margin-top: 20px; width: 200px;" type="button" class="btn  btn-lg btn-block">Cliquez ici</button></a></p>';
					?>
				</div>


				<!--<div class="center" style="">
					<div class="pagination">
						<a href="#">&laquo;</a>
						<a href="#" class="active">1</a>
						<a href="?c=forum2">2</a>
						<a href="?c=forum3">3</a>

						<a href="?c=forum2">&raquo;</a>
					</div>
				</div>-->



			</div>
			<!-- ###### -->
		</div>
		<!-- ####################################################################################################### -->
	</div>
	<div class="container" style="padding-left: 100px">
		<textarea id="message" name="commentaire" cols="40" rows="4" placeholder="Commenter..."></textarea>
		<input class="button btn btn-default" type="submit" name="publier" value="Publier"
			style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;" />
			<br><a style="text-decoration: none;" href="?c=forum">Actualisez</a>
		</form><br><br><br><br>
	</div>
	</div>
	<!-- ####################################################################################################### -->
	<div class="wrapper col5">
		<?php
		include ('footer2.php')
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
	<script>
		$('body').scrollspy({
			target: '#navbar-example'
		})
	</script>
</body>

</html>