


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
        <li style=""><a href="?c" style="text-decoration: none">Accueil</a></li>
				<li><a href="#rubrique" style="text-decoration: none">Rubriques</a>
          <ul style="width: 152px;" >
            <li ><a href="#" style="text-decoration: none" class="sousMenu"><b>Face-à-face</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Questions d'actualité</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Jt religions</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Entretien avec</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Arts et âme</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Temps du reveil</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Questions Réponses</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Interview à domicile</b></a></li>
						
						
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Oracle</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Parole aux femmes</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Grand reportage</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>210 zapping</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Découverte</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Piqure d'histoire</b></a></li>
						
						
						
          </ul>
        </li>
        <li><a class="active" href="?c=forum" style="text-decoration: none">Forum</a></li>
        
        
        <li class="last"><a href="#" style="text-decoration: none">Galeries</a>
						<ul style="width: 152px;" >
            <li ><a href="#" style="text-decoration: none" class="sousMenu"><b>Images</b></a></li>
            <li><a href="?c=gal" style="text-decoration: none" class="sousMenu"><b>Vidéos</b></a></li>
						</ul>
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
<div class="wrapper row3" style="height:780px">
    <div id="container" class="clear" style="margin-bottom:; ">
        <div class="container spacer col-md-6 col-xs-12 col-md-offset-3" style="margin-top:30px; ">
		
		  <div class="panel panel-default">
		  
			<div class="panel-heading">INFOS</div>
				
			<div class="panel-body">
				<?php if(isset($Commentaires['commentaire'])){ echo($Commentaires['commentaire']);} ?>
        <?php if(isset($Co['comment_vid'])){ echo($Co['comment_vid']);} ?>
                  <?php $re = new Reponses(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
      
                  $affRe = $re->affichageReponse();
                  ?>
        
        <?php
              if(isset($_SESSION['nom_user'])){
                $d = date('j M Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
                $mois = date('M');
                $annee = date('Y');
                $heure = date('H');
                $minute = date('i'); $date_comment = date('j M Y');
              echo '<br><br><br>
              <p>
                <form action="" method="post">
                <input type="number" name="id_commentaire" placeholder="id_commentaire" value="'.$Commentaires['id_commentaire'].'" hidden/>
                
                <textarea type="text" id="reponses" name="reponses" cols="40" rows="4" placeholder="Commenter..."></textarea>
                <input type="number" name="id_user" placeholder="id_user" value="'.$_SESSION['id_user'].'" hidden/>
                <input type="number" name="annee_reponse" placeholder="annee_reponse" value="'.$annee.'" hidden/>
                <input type="text" name="heure_reponse" placeholder="heure_reponse" value="'.$heure.'" hidden/>
                <input type="text" name="minute_reponse" placeholder="minute_reponse" value="'.$minute.'" hidden/>
                <input type="text" name="date_reponse" placeholder="date_reponse" value="'.$date_comment.'" hidden/>
                
                
                <a style="color: #B22222;" href="?c=affComm&code='.$Commentaires['id_commentaire'].'"><button style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;" type="submit" name="envoyer">Publier</button></a>
                <br><a style="color: #B22222;" href="?c=affComm&code='.$Commentaires['id_commentaire'].'">Actualisez</a>
                <!--<input class="button btn btn-default" type="submit" name="envoyer" value="Publier" style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;"/>-->
                </form>
              </p>
              
              ';}
            ?>
              
              <?php while($Rep=$affReponse->fetch()){?>
              
              <div id="latestnews" style="border-top: 1px solid gray;  padding-top: 20px;">
                      <p class="readmore"><span style="float: left"><i><?php echo($Rep['heure_reponse'])?>h <?php echo($Rep['minute_reponse'])?></i></span><?php echo($comm['date_reponse'])?></p>            
              <p>
              
              <img class="imgl" src="images/<?php echo($Rep['photo'])?>" style="border-radius: 100%; " alt="" width="80" height="80" />
              <strong><?php echo($Rep['prenom_user'])?> <?php echo($Rep['nom_user'])?></strong><br>
              <?php echo($Rep['reponses'])?>
              </p>
              
                 <p class="readmore" style="margin-top: 70px;"><a href="?c=affComm&code=<?php ?>" style="text-decoration: none;">Répondre &raquo;</a></p>
															           
              </div>
              
              <?php }?>
        
        
			</div>
			</div>
		</div>
		
        <!-- ####################################################################################################### -->
    </div>

<!-- ####################################################################################################### -->
</div>
<div class="wrapper col5">
    <?php 
		include ('footer2.php')
	?>
</div>

</body>
</html>