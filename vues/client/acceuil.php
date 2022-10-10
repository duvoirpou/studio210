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
        <li style=""><a class="active" href="" style="text-decoration: none">Accueil</a></li>
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





        <!--<div class="sousNav" style="">
          <ul style="width: 152px; margin-left: -470px; height: 134px" >
            <li ><a href="?c=R_f_a_f" style="text-decoration: none" class="sousMenu"><b>Face-à-face</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Interview à domicile</b></a></li>
          </ul>

          <ul style="width: 152px; margin-left: -350px; height: 134px" >
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Questions d'actualité</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Oracle</b></a></li>
          </ul>

          <ul style="width: 152px; margin-left: -200px; height: 134px" >
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Jt religions</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Parole aux femmes</b></a></li>
          </ul>

          <ul style="width: 152px; margin-left: -50px; height: 134px" >
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Entretien avec</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Grand reportage</b></a></li>
          </ul>

          <ul style="width: 152px; margin-left: 100px; height: 134px" >
          	<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Arts et âme</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>210 zapping</b></a></li>
          </ul>

          <ul style="width: 152px; margin-left: 240px; height: 134px" >
          	<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Temps du reveil</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Découverte</b></a></li>
          </ul>

          <ul class="DernierUl" style="margin-left: 390px; height: 134px" >
            <li style="width: 130px;"><a href="#" style="width: 130px; text-decoration: none" class="sousMenu"><b>Questions Réponses</b></a></li>
            <li style="width: 130px;"><a href="#" style="width: 130px; text-decoration: none" class="sousMenu"><b>Piqure d'histoire</b></a></li>
          </ul>
				</div>		-->


        </li>
        <li><a href="index.php?c=forum" style="text-decoration: none">Forum</a></li>

        <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a class="" href="?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
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
				<!--<li><a href="#" style="text-decoration: none">Connexion</a>
						<ul style="width: 152px;" >
            <li ><a href="#" style="text-decoration: none" class="sousMenu"><b>Forum connexion</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Forum inscription</b></a></li>
						</ul>
				</li>-->

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
  </div>
</div>
<br>
<!--<div class="wrapper col2">-->
	<div id="gallery">




  <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="images/demo/gallery_1.gif" alt="banner" style="width: 100%;">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="images/demo/gallery_2.gif" alt="banner" style="width: 100%;">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="images/demo/gallery_3.gif" alt="banner" style="width: 100%;">
        </div>
        <!-- #Item 1 -->


        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i style="" class="glyphicon-chevron-left fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i style="" class="glyphicon-chevron-right fa fa-angle-right"></i></a>
    </div>
	<!--<h1 style="color: #DAA520;">A la une</h1>-->
	</div>
<!--</div>-->
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
	<div class="wrapper row3" style="margin-top: 50px">
			<div id="container" class="clear">
				<!-- ####################################################################################################### -->
				<div id="homepage" class="clear">
					<!-- ###### -->
					<div id="content">
								<div id="top_featured" class="clear">
									<ul class="clear">
                    <?php while($e=$af->fetch()){?>
										<li class="last" style="margin: 7px">
											<h2 style="color: #DAA520;"><?php if($e['theme']!=''){echo($e['theme']);} else{echo 'Thème &nbsp;';}?></h2>
											<video poster="" controls src="videos/<?php echo($e['videos'])?>" style="height: 200px; width: 300px"></video>
											<p><?php if($e['date_video']!=''){echo($e['date_video']);} else{echo 'Date &nbsp;';}  ?></p>
                      <p>
											<script>
																			var recupe;
																		var texte="<?php echo($e['msg_videos']);?>";
																		var posi=texte.substr(0,50);
																		function trouv(){
																			return posi;
																		}
																		recupe=trouv();

																		document.write(recupe);
																	</script>&hellip;
                      </p>
											<p class=""><a style="text-decoration: none" class="" href="?c=affNews&code=<?php echo($e['id_videos'])?>">Continuer de lire &raquo;</a></p>
										</li><?php }?>
										<!--<li class="last">
											<h2 style="color: #DAA520;">Titre</h2>
											<video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="height: 200px; width: 300px"></video>

											<p>Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210 Commentaires studio 210.</p>
											<p class="readmore"><a href="#">Continuer de lire &raquo;</a></p>
										</li>-->
									</ul>
								</div>



								<div id="latestnews" style="width:580px">
													<!--<h2 style="color: #DAA520;">Titre</h2>-->
														<ul>
															<?php while($et=$aff->fetch()){?>
															<li><video class="imgr" controls loop src="videos/<?php echo($et['videos'])?>" alt="" width="180" height="100" ></video>
                                <p><?php echo($et['date_video'])?></p>
                                <p style="color: #DAA520;"><?php echo($et['rubrique'])?></p>
                                <p style="color: #DAA520;"><?php echo($et['theme'])?></p><br>
																<p>
															<script>
																			var recup;
																		var txt="<?php echo($et['msg_videos'])?>";
																		var pos=txt.substr(0,40);
																		function trouve(){
																			return pos;
																		}
																		recup=trouve();

																		document.write(recup);
																	</script>
																	&hellip;
																	</p>

																				<p class="readmore" style="margin-top: 30px;"><a style="text-decoration:none" href="index.php?c=affNews&code=<?php echo($et['id_videos'])?>">Lire tout &raquo;</a></p>
																			</li>

																			<?php }?>

														 <!-- <li><img class="imgr" src="images/bmb/IMG_20181011_092822.jpg" alt="" width="180" height="100" />
																<p>Le contenu des enseignements est défini depuis juin 2001 par le nouveau Programme de formation de l'ecole congolaise.  Au Congo, les enfants entrent à l'école primaire vers l'âge de 5 ans et complètent<!-- <a href="" title="Free Website Templates">OS Templates</a>. This Website is distributed using a <a href="">Website Ecole Licence&hellip;</p>
																<p class="readmore"><a href="#">Lire tout &raquo;</a></p>
															</li>
															<li><img class="imgr" src="images/bmb/IMG_20181023_075237.jpg" alt="" width="180" height="100" />
																<p>Le contenu des enseignements est défini depuis juin 2001 par le nouveau Programme de formation de l'ecole congolaise.  Au Congo, les enfants entrent à l'école primaire vers l'âge de 5 ans et complètent</a>&hellip;</p>
																<p class="readmore"><a href="#">Lire tout &raquo;</a></p>
															</li>
															<li class="last"><img class="imgr" src="images/bmb/IMG_20181019_122327.jpg" alt="" width="180" height="100" />
																<p>Le contenu des enseignements est défini depuis juin 2001 par le nouveau Programme de formation de l'ecole congolaise.  Au Congo, les enfants entrent à l'école primaire vers l'âge de 5 ans et complètent&hellip;</p>
																<p class="readmore"><a href="#">Lire tout &raquo;</a></p>
															</li>-->
														</ul>
								</div>

						<!-- <div style="">
            <p>
                  Un projet que constituent plusieurs rubriques allant de deux à trente minutes
                  à l'instar de : <strong>Paroles aux femmes</strong>, le <strong>JT des religions</strong>
                  , <strong>Entretien avec&#133;</strong>, le <strong>Livre du dimanche</strong>,
                  <strong>Face à face</strong> et bien d'autres. On peut aussi citer la tribune
                  intelectuelle <strong>Art et âme</strong> qui désormais s'est spécialisée dans les
                  débats (confrontations).
              </p>
              <p>
                  Studio 210 est ainsi le programme officiel de Télé-Congo dans lequel sont traités tous
                  les sujets liés à la spiritualité, la culture, la société et aux réligions
                  avec un style simple, direct et souvent tenté d'humour. L'objectif ici est de se
                  rapprocher de la vérité tout en se basant sur le principe &#171;du choc des idées jaillit
                   la lumière&#187;.
              </p>
              <p>
                  L'initiateur et producteur exécutif de ce programme a donc sélectionné plus d'une dizaine
                  de professionnels  pour l'accompagner dans cette merveilleuse avanture. Des hommes et des femmes
                  passionnés par la spiritualité, la culture et la production TV.
              </p>
              <p style="color: #DAA520; text-align: center;"><strong>- L'émission du peuple -</strong></p>
            </div> -->



					</div>
					<!-- ###### -->
					<div id="column">
						<!--<div class="holder">
							<h2>Aux parents d'élèves</h2>

							<video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="height: 200px; width: 300px"></video>
							<p class="readmore">&nbsp;</p>
						</div>-->
						<div class="holder last" id="rubrique">
							<h2 style="color: #DAA520;"><!--Etudiant &amp; -->Dernières émissions de nos rubriques</h2>
							<ul class="staffmembers">
							<?php while($faf=$afFaf->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($faf['videos'])?>" style="width: 150px"></video>

									<div class="fl_left">
										<p><strong>Face à face</strong></p>
										<p>&nbsp;</p>
										<p><a href="R_f_a_f.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
							<?php }?>
							<?php while($ea=$afEa->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($faf['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Entretien<br>avec</strong></p>
										<!--<p>&nbsp;</p>-->
										<p><a href="ea.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($tr=$afTr->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($tr['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Temps du<br>reveil</strong></p>
										<!--<p>&nbsp;</p>-->
										<p><a href="#" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($qa=$afQa->fetch()){?>
					<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($qa['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Questions<br>d'actualité</strong></p>
										<!--<p>Commentaires</p>-->
										<p><a href="qa.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($aa=$afAa->fetch()){?>
					<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($aa['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Arts et âmes</strong></p>
										<p>&nbsp;</p>
										<p><a href="#" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($qr=$afQr->fetch()){?>
					<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($qr['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Questions/<br>Réponses</strong></p>
										<!--<p>Commentaires</p>-->
										<p><a href="qr.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($jtr=$afJtr->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($jtr['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Jt religions</strong></p>
										<p>&nbsp;</p>
										<p><a href="jtr.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($ig=$afIg->fetch()){?>
								<!--<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($ig['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Instant<br>gospel</strong></p>

										<p><a href="#" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>-->
								<?php }?>
								<?php while($id=$afId->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($id['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Interview à<br>domicile</strong></p>
										<!--<p>Commentaires</p>-->
										<p><a href="id.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($oracle=$afOracle->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($oracle['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Oracle</strong></p>
										<p>&nbsp;</p>
										<p><a href="oracle.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($pf=$afPf->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($pf['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Parole aux<br>femmes</strong></p>
										<!--<p>Commentaires</p>-->
										<p><a href="pf.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($gr=$afGr->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($gr['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Grand<br>reportage</strong></p>
										<!--<p>Commentaires</p>-->
										<p><a href="gr.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($zapping=$afZapping->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($zapping['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>210<br>Zapping</strong></p>
										<!--<p>Commentaires</p>-->
										<p><a href="zapping.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($decouverte=$afDecouverte->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($decouverte['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Découverte</strong></p>
										<p>&nbsp;</p>
										<p><a href="decouverte.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
								<?php while($pq=$afPq->fetch()){?>
								<li class="clear"><video class="imgl" controls loop src="videos/<?php echo($pq['videos'])?>" style="width: 150px"></video>
									<div class="fl_left">
										<p><strong>Piqûre<br>d'histoire</strong></p>

										<p><a href="pq.php" style="text-decoration:none">Voir plus &raquo;</a></p>
									</div>
								</li>
								<?php }?>
							</ul>
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