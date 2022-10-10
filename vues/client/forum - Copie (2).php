

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




.pagination a:hover:not(.active) {background-color: #ddd;}
  
  
  
  
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
        <li><a class="active" href="" style="text-decoration: none">Forum</a></li>
        
        
        <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a href="?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>
        
        
        
        <li class="last"><a href="#" style="text-decoration: none">Galeries</a>
						<ul style="width: 106px;" >
            <li ><a href="#" style="width: 106px; text-decoration: none" class="sousMenu"><b>Images</b></a></li>
            <li><a href="?c=gal" style="width: 106px; text-decoration: none" class="sousMenu"><b>Vidéos</b></a></li>
						</ul>
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
    <div id="search" style="">
      <form action="" method="post">
        <fieldset>
          <a href=""><img src="images/AppListIcon.targetsize-20.png" style="position: absolute; margin-left: 250px; margin-top: 5px"/></a>
          <!--<input type="submit" name="go" id="go" value="OK" />-->
          <input type="text" placeholder="Rechercher..." />
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
	<div class="wrapper row3" style="margin-top: 50px">
			<div id="container" class="clear"> 
				<!-- ####################################################################################################### -->
				<div id="homepage" class="clear"> 
					<!-- ###### -->
					<div id="content" style="width:100%;">
								
						 <?php while($liste=$affListSuj->fetch()){?>
                <a style="text-decoration: none; margin: 10px;" href="?c=affSuj2&code=<?php $_SESSION['id_sujet'] = $liste['id_sujet']; echo($liste['id_sujet'])?>"><?php echo($liste['sujet'])?></a>
             <?php }?>
						
								<div id="latestnews" style="width:100%; padding-top: 20px;">
													<h2 style="color: #DAA520; text-align: center">
                            <?php /* while($sjt=$affSujets->fetch()){?>
                                <?php $_SESSION['id_sujet']=$sjt['id_sujet']; echo($sjt['sujet'])?>
                            <?php } */?>
                          </h2>
														<ul>
															
															
												<?php while($comm=$affCommentairesSujets->fetch()){?>
														  <li>
                                <p class="readmore"><span style="float: left"><i><?php echo($comm['heure_commentaire'])?>h <?php echo($comm['minute_commentaire'])?></span><?php echo($comm['date_commentaire'])?></i></p>            
              
                                <p style="text-align: justify; margin-top: 20px;">
                                  <img class="imgl" src="images/<?php echo($comm['photo'])?>" style="border-radius: 100%; " alt="" width="80" height="80" />
                                  <span><strong><?php echo($comm['pseudo'])?></strong></span><br>
                                  <script>
																			var recupe;
																		var texte="<?php echo($comm['commentaire'])?>";
                                    
                                    if(texte.length>501){
																		var posi=texte.substr(0,501);
																		function trouv(){
																			return posi;
																		}
																		recupe=trouv();
																		rec=recupe+'&hellip;';
																		document.write(rec);}
                                    else{document.write(texte);}
																	</script>
                      </p>
                                </p>
																<script>
                                  var texte="<?php echo($comm['commentaire'])?>";
                                  if(texte.length>501){
                                  document.write('<p class="readmore" style="margin-top: 70px;"><a style="text-decoration: none;" href="?c=affComm&code=<?php $_SESSION['id_commentaire'] = $comm['id_commentaire']; echo($comm['id_commentaire'])?>">Lire tout &raquo;</a></p>')
                                  ;} else{document.write('<p class="readmore" style="margin-top: 70px;">&nbsp;</p>');}
                                </script>
                              </li><?php }?>
															<!--<li><img class="imgr" src="images/bmb/IMG_20181023_075237.jpg" style="border-radius: 100%" alt="" width="80" height="80" />
																<p style="text-align: justify;">Le contenu des enseignements est défini depuis juin 2001 par le nouveau Programme de formation de l'ecole congolaise.  Au Congo, les enfants entrent à l'école primaire vers l'âge de 5 ans et complètent</a>&hellip;</p>
																<p class="readmore"><a href="#">Lire tout &raquo;</a></p>
															</li>
															<li class="last"><img class="imgr" src="images/bmb/IMG_20181019_122327.jpg" style="border-radius: 100%" alt="" width="80" height="80" />
																<p style="text-align: justify;">Le contenu des enseignements est défini depuis juin 2001 par le nouveau Programme de formation de l'ecole congolaise.  Au Congo, les enfants entrent à l'école primaire vers l'âge de 5 ans et complètent&hellip;</p>
																<p class="readmore"><a href="#">Lire tout &raquo;</a></p>
															</li>-->
														</ul>
								</div>
						<?php
				if(isset($_SESSION['nom_user'])){
          $d = date('j M Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
                $mois = date('M');
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
          <input type="text" name="date_commentaire" placeholder="minute_commentaire" value="'.$date_comment.'" hidden/>
                 
          
          
          <input class="button btn btn-default" type="submit" name="publier" value="Publier" style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;"/>
          </form>
        </p>
        <p></p>
                      
        ';}
			?>
                <?php
                if(!isset($_SESSION['nom_user']))
                echo '<p class="readmore" style=""> <a style="text-decoration: none;" href="?c=compte"><button style="background: #DAA520; color: #B22222; margin-top: 20px" type="button" class="btn  btn-lg btn-block"><strong>Participer</strong></button></a></p>';
					?>
          </div>
          
          
          <div class="center" style="">
      <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="?c=forum2" >2</a>
        <a href="?c=forum3">3</a>
        
        <a href="?c=forum2">&raquo;</a>
      </div>
    </div>
          
					<!-- ###### 
					<div id="column">
            
						
            
              <div class="holder last" id="rubrique">
							<h2 style="color: #DAA520;">Choisir une rubrique à commenter</h2>
							<ul class="staffmembers">
								<li class="clear">
									<div class="fl_left">
										<p><strong><a href="?c=R_f_a_f" style="text-decoration:none">&raquo;Face à face</a></strong></p>
										<p>&nbsp;</p>
										</div>
								</li>
								<li class="clear">
									<div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Entretien avec</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
								<li class="clear">
                <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Temps du reveil</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
					<li class="clear">
                <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Questions d\'actualité</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
					<li class="clear">
                 <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Arts et âmes</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
					<li class="clear">
                  <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Questions/Réponses</a></strong></p>
										<p>&nbsp;</p>
									</div>
								</li>
								<li class="clear">
                <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Jt religions</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
								<li class="clear">
                  <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Instant gospel</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
								<li class="clear"><div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Interview à domicile</a></strong></p>
										<p>&nbsp;</p>
									</div>
								</li>
								
								<li class="clear">
                <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Oracle</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
								<li class="clear"><div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Parole aux femmes</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
								<li class="clear">
                <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Grand reportage</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
								<li class="clear">
                <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;210 Zapping</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
								<li class="clear"><div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquoDécouverte</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
								<li class="clear">
                <div class="fl_left">
										<p><strong><a href="#" style="text-decoration:none">&raquo;Piqûre d\'histoire</a></strong></p>
										<p>&nbsp;</p>
										
									</div>
								</li>
							</ul>
						</div>-->
              
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
<!--<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>-->
<script src="js/all.js"></script>

<!-- jquery 
<script src="assets/jquery.js"></script>-->

<!-- wow script 
<script src="assets/wow/wow.min.js"></script>-->


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<!--<script src="assets/respond/respond.js"></script>-->

<!-- gallery 
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>-->

<!-- custom script 
<script src="assets/script.js"></script>--><!-- / Homepage Specific -->
</body>
</html>