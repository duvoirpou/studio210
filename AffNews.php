<?php
if(isset($_SESSION['inscrit'])){
$cnom = 'inscrit';

$cvaleur = $_SESSION['inscrit'];

setcookie($cnom, "", time() - 3600 * 24);
}

session_start();
include('connexionBdd/connexionBdd.php');
include('config_affNews.php');
include('modeles/classe_news.php');
	include('modeles/classe_commentaires_vid.php');
	include('modeles/classe_commentaire.php');
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
          <li style=""><a class="" href="index.php?c" style="text-decoration: none">Accueil</a></li>
          <li><a href="#" style="text-decoration: none">Rubriques</a>
            <ul style="width: 152px;">
              <li><a href="R_f_a_f.php" style="text-decoration: none" class="sousMenu"><b>Face-&agrave;-face</b></a>
              </li>
              <li><a href="qa.php" style="text-decoration: none" class="sousMenu"><b>Questions
                    d'actualit&eacute;</b></a></li>
              <li><a href="jtr.php" style="text-decoration: none" class="sousMenu"><b>Jt religions</b></a></li>
              <li><a href="ea.php" style="text-decoration: none" class="sousMenu"><b>Entretien avec</b></a></li>
              <li><a href="aa.php" style="text-decoration: none" class="sousMenu"><b>Arts et &acirc;me</b></a></li>
              <li><a href="tr.php" style="text-decoration: none" class="sousMenu"><b>Temps du reveil</b></a></li>
              <li><a href="qr.php" style="text-decoration: none" class="sousMenu"><b>Questions R&eacute;ponses</b></a>
              </li>

            </ul>

            <ul style="width: 152px; margin-left: 152px; height: 234px">
              <li><a href="id.php" style="text-decoration: none" class="sousMenu"><b>Interview &agrave; domicile</b></a>
              </li>

              <li><a href="oracle.php" style="text-decoration: none" class="sousMenu"><b>Oracle</b></a></li>
              <li><a href="pf.php" style="text-decoration: none" class="sousMenu"><b>Parole aux femmes</b></a></li>
              <li><a href="gr.php" style="text-decoration: none" class="sousMenu"><b>Grand reportage</b></a></li>
              <li><a href="zapping.php" style="text-decoration: none" class="sousMenu"><b>210 zapping</b></a></li>
              <li><a href="decouverte.php" style="text-decoration: none" class="sousMenu"><b>D&eacute;couverte</b></a>
              </li>
              <li><a href="pq.php" style="text-decoration: none" class="sousMenu"><b>Piq&ucirc;re d'histoire</b></a>
              </li>

            </ul>
          </li>
          <li><a href="forum.php" style="text-decoration: none">Forum</a></li>

          <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a class="" href="index.php?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
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



  <?php


if(isset($_POST['modifNews'])){
  $id_videos      = htmlentities(trim($_POST['id_videos']));
  $theme	   	= htmlentities(trim($_POST['theme']));
  $msg_videos	   	= htmlentities(trim($_POST['msg_videos']));
  $rubrique	   	= htmlentities(trim($_POST['rubrique']));
  $date_video	   	= htmlentities(trim($_POST['date_video']));



  $videos	= htmlentities(trim($_FILES['videos']['name']));




  //tmp_name est un dossier temporaire
  $fichierTempo=$_FILES['videos']['tmp_name'];

  //chemin pour recevoir les photos du site
  //videos nom du dossier et $nomPhoto fichier temporaire
  move_uploaded_file($fichierTempo, 'videos/'.$videos);

  $ModifierNews = new Videos($id_videos,$theme,$msg_videos,$rubrique,$date_video,$videos);

  $reponse = $ModifierNews->ModifierNews();

  if($reponse){
    header('location:?c=affMbre');
  }
}


if(isset($_GET['code'])){

  $code=$_GET['code'];

  $ModifierNews = new Videos(NULL,NULL,NULL,NULL,NULL,NULL);
  $News = $ModifierNews->getIdNews($code);

}



if(isset($_POST['envoyer'])){
  //var_dump($_POST);exit;

  if(!empty($_POST['comment_vid']) AND !empty($_POST['id_videos']) AND !empty($_POST['id_user'])){//si ces champs sont remplis -> ligne 33

  $comment_vid		= htmlentities(trim($_POST['comment_vid']));

  $id_videos		= htmlentities(trim($_POST['id_videos']));
  $id_user		= htmlentities(trim($_POST['id_user']));
  $annee_comment		= htmlentities(trim($_POST['annee_comment']));
  $heure_comment		= htmlentities(trim($_POST['heure_comment']));
  $minute_comment		= htmlentities(trim($_POST['minute_comment']));
  $date_comment		= htmlentities(trim($_POST['date_comment']));





  $AjouterCommentaire = new Commentaires_video (NULL,$comment_vid,$id_videos,$id_user,$annee_comment,$heure_comment,$minute_comment,$date_comment);

  $reponse = $AjouterCommentaire->ajoutCommentV();


  /*	$varId_news=$_SESSION['id_news'];*/


  //if($reponse){si le message est envoyé

    //header('location:?c=affNews&code=$varId_news');//on revient sur la page "commentaire"

  //}else{//sinon on revient sur la page "commentaire"
    //header('location:?c=affNews&code=$varId_news');
  //}
  }}//le msg est envoyé



  $Commentaire = new Commentaires(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

  $affCommentaires = $Commentaire->affichageCommentaires();

?>


  <!-- ####################################################################################################### -->
  <div class="wrapper row3" style="">
    <div id="container" class="clear" style="">

      <div class="container spacer col-md-6 col-xs-12 col-md-offset-3" id="homepage" style="margin-top:30px; ">

        <div class="panel panel-default" id="lien">

          <div class="panel-heading" style="">
            <h1 style="color: #DAA520; background: none; text-align: center;"><video poster="" controls
                src="videos/<?php echo($News['videos'])?>"
                style="height: 200px; width: 300px"></video><br><br><?php echo($News['rubrique']); ?></h1><span
              style="color: #DAA520;"><?php echo($News['theme']); ?></span>
          </div>

          <div class="panel-body">
            <p style=""><?php $_SESSION['id_videos']=$News['id_videos']; echo($News['msg_videos']); ?></p>
            <?php $Commentaires = new Commentaires_video(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

                  $affComment = $Commentaires->affichageCommentaires();
                  ?>


            <?php for($i=0; $i < count($results->data); $i++) {?>

            <div id="latestnews" style="border-top: 1px solid gray;  padding-top: 20px;">
              <p class="readmore"><span style="float: left"><i><?php echo($results->data[$i]['heure_comment'])?>h
                    <?php echo($results->data[$i]['minute_comment'])?></i></span><?php echo($results->data[$i]['date_comment'])?>
              </p>
              <p style="text-align: justify; margin-top: 20px;">

                <img class="imgl" src="images/<?php echo($results->data[$i]['photo'])?>" style="border-radius: 100%; "
                  alt="" width="80" height="80" />
                <strong><?php echo($results->data[$i]['pseudo'])?></strong><br>

                <script>
                  var recupe;
                  var texte = "<?php echo($results->data[$i]['comment_vid'])?>";

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


              <script>
                var texte = "<?php echo($results->data[$i]['comment_vid'])?>";
                if (texte.length > 501) {
                  document.write(
                    '<p class="readmore" style="margin-top: 10px;"><a href="?c=affNewsComm&code=<?php echo($comm['
                    id_vid']) ?>" style="text-decoration: none;">Lire tout &raquo;</a></p>');
                } else {
                  document.write('<p class="readmore" style="margin-top: 10px;">&nbsp;</p>');
                }
              </script>
            </div>

            <?php }?>
            <?php
              if(isset($_SESSION['nom_user'])){
                $tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
					$date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
											 $mois = $tab_mois[date("n")];
					$d = date('j').' '.$mois.' '.date('Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';

                //$d = date('j M Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
                //$mois = date('M');
                $annee = date('Y');
                $heure = date('H');
                $minute = date('i'); $date_comment = date('j M Y');
              echo '<br><br><br>
              <p>
                <form method="post">
                <textarea type="text" id="message" name="comment_vid" cols="40" rows="4" placeholder="Commenter..."></textarea>
                <input type="number" name="id_user" placeholder="id_user" value="'.$_SESSION['id_user'].'" hidden/>
                <input type="number" name="id_videos" placeholder="id_videos" value="'.$News['id_videos'].'" hidden/>
                <input type="number" name="annee_comment" placeholder="annee_comment" value="'.$annee.'" hidden/>
                <input type="text" name="heure_comment" placeholder="heure_comment" value="'.$heure.'" hidden/>
                <input type="text" name="minute_comment" placeholder="minute_comment" value="'.$minute.'" hidden/>
                <input type="text" name="date_comment" placeholder="date_comment" value="'.$date_jour.'" hidden/>


                <a style="color: #B22222;" href="?c=affNews&code='.$News['id_videos'].'"><button class="button btn btn-default" style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;" type="submit" name="envoyer">Publier</button></a>
                <br><a style="text-decoration: none;" href="?c=affNews&code='.$News['id_videos'].'">Actualisez</a>
                <!--<input class="button btn btn-default" type="submit" name="envoyer" value="Publier" style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;"/>-->
                </form>
              </p>

              ';}
            ?>

            <?php
                if(!isset($_SESSION['nom_user']))
                echo '<strong>Connectez-vous pour pouvoir commenter cette vidéo</strong> <p class="" style="width: 200px;"><a style="text-decoration: none; width: 200px;" href="?c=compte"><button style="background: #DAA520; color: #B22222; margin-top: 20px; width: 200px;" type="button" class="btn  btn-lg btn-block">Cliquez ici</button></a></p>';
					?>
          </div>

        </div>
      </div>
      <div class="center">
        <?php
        echo $paginator->createLinks($links);
      ?>

      </div>
      <!-- ####################################################################################################### -->
    </div>

    <!-- ####################################################################################################### -->
  </div>
  <div class="wrapper col5">
    <?php
		include ('vues/client/footer2.php')
	?>
  </div>

  <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
  <script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>

  <script src="js/all.js"></script>

  <!-- jquery -->
  <script src="assets/jquery.js"></script>

  <!-- wow script -->
  <script src="assets/wow/wow.min.js"></script>


  <!-- boostrap -->
  <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

  <!-- jquery mobile -->
  <script src="assets/mobile/touchSwipe.min.js"></script>
  <script src="assets/respond/respond.js"></script>

  <!-- gallery -->
  <script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

  <!-- custom script -->
  <script src="assets/script.js"></script><!-- / Homepage Specific -->
</body>

</html>