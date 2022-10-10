<?php
// Start the session
session_start();
include('connexionBdd/connexionBdd.php');
include('config_id.php');
include('modeles/classe_commentaire.php');
	include('modeles/classe_messages.php');
  include('modeles/classe_commentaires_vid.php');
  include('modeles/classe_news.php');

if(isset($_SESSION['inscrit'])){
$cnom = 'inscrit';

$cvaleur = $_SESSION['inscrit'];

setcookie($cnom, "", time() - 3600 * 24);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

<link rel="stylesheet" href="css/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="layout/styles/gallery.css" type="text/css" />

<link rel="stylesheet" href="css/all.css" />


<link rel="stylesheet" href="responsive.css" type="text/css" />
<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />



<!-- Homepage Specific -->
<style>

body{
		font-family:Georgia, "Times New Roman", Times, serif;
	}

</style>

<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!--<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>-->

<!-- prettyPhoto -->
<link rel="stylesheet" href="layout/scripts/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/prettyphoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false,
        social_tools: false
    });
});
</script>
<!-- / prettyPhoto -->
</head>
<body id="top">
<div class="wrapper col1">
  <div id="head">
    <!--<h1><a href="index.html" style="text-decoration: none">Studio 210</a></h1>-->
		<div ><img src="images/IMG-20190414-WA0016.jpg" style="width: 100px; height: 100px;" /></div>
    <p></p>
    <div id="topnav">
      <ul>
        <li><a href="index.php?c" style="text-decoration: none">Accueil</a></li>
        <li><a href="#" class="active" style="text-decoration: none">Rubriques</a>
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
        <li><a href="index.php?c=forum" style="text-decoration: none">Forum</a></li>

         <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a class="" href="index.php?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>

        <li class="last"><a  href="gallery.php" style="text-decoration: none">Galeries</a>
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


<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->

                  <?php
                  //$Commentaire = new Commentaires(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

                  //$affCommentaires = $Commentaire->affichageCommentaires();

                  //$Commentaires = new Commentaires_video(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

                  //$affComment = $Commentaires->affichageCommentaires();

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
                          alert('Effectué avec succès');
                          document.location.replace('id.php');
                          </script>
		                  ";
                    }
                    }//le msg est envoyé


                    }



                  if(isset($_GET['code'])){

                    $code=$_GET['code'];

                    $ModifierNews = new Videos(NULL,NULL,NULL,NULL,NULL,NULL);
                    $News = $ModifierNews->getIdNews($code);

                  }
                  ?>


    <div id="gallery" class="clear">
      <h2 class="title" style="color: #DAA520;">Toutes les vid&#233;os Interview à domicile</h2>
      <ul>
        <?php  ?>
        <?php for($i=0; $i < count($results->data); $i++) {?>

        <li style="width: 295px; height: 400px;"><video controls src="videos/<?php echo($results->data[$i]['videos'])?>" style="width: 295px; height: 200px; "></video>
        <br><br><h2>Th&egrave;me</h2>
        <p>
          <script>
																			var recupe;
																		var texte="<?php $_SESSION['id_videos']=$results->data[$i]['id_videos']; echo($results->data[$i]['msg_videos']); ?>";
																		var posi=texte.substr(0,50);
																		function trouv(){
																			return posi;
																		}
																		recupe=trouv();

																		document.write(recupe);
																	</script>&hellip;
        </p>
		<br><p class="readmore" style="" id="lien"><a href="index.php?c=affNews&code=<?php echo($results->data[$i]['id_videos']) ?>" style="text-decoration: none;">Lire tout &raquo;</a></p></li>

        <?php }?>
        <!-- <li style="width: 300px; height: 400px;"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		commentaires commentaires commentaires commentaires commentaires commentaires commentaires commentaires commentaires commentaires
        <li class="last" style="width: 300px; height: 300px;"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>



        <li style="width: 300px; height: 400px;"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>

        <li style="width: 300px; height: 400px;"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>

        <li class="last" style="width: 300px; height: 400px;"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>

        <li style="width: 300px; height: 400px;"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>

        <li style="width: 300px; height: 400px;"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>

        <li class="last" style="width: 300px; height: 400px;"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>









        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>

        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>

        <li class="last" style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>

	  -->

	  </ul>
    </div>
    <!-- ####################################################################################################### -->
    <!--<div class="pagination">
      <ul>
        <!--<li class="prev"><a href="#" style="text-decoration:none">&laquo; Pr&#233;c&#233;dent</a></li> ->
        <li><a href="#" class="splitter" style="text-decoration:none">1</a></li>
        <li><a href="?c=gal2" style="text-decoration:none">2</a></li>
		<li><a href="?c=gal3" style="text-decoration:none">3</a></li>
        <!--<li >&hellip;</li>
        <li><a href="#">6</a></li>
        <li class="current">7</li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li> ->
        <li class="next"><a href="?c=gal2" style="text-decoration:none">Suivant &raquo;</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
    <div class="center">
        <?php
        echo $paginator->createLinks($links);
      ?>

      </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
    <?php
		include ('vues/client/footer2.php')
	?>
</div>


<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>


<script src="js/all.js"></script>

</body>
</html>