<?php
// Start the session
session_start();
include('connexionBdd/connexionBdd.php');
include('config_gallery.php');
include('modeles/classe_messages.php');
?>


<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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

  <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
  <!--<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>-->

  <!-- prettyPhoto -->
  <link rel="stylesheet" href="layout/scripts/prettyphoto/prettyPhoto.css" type="text/css" />
  <script type="text/javascript" src="layout/scripts/prettyphoto/jquery.prettyPhoto.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
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
      <div><img src="images/IMG-20190414-WA0016.jpg" style="width: 100px; height: 100px;" /></div>
      <p></p>
      <div id="topnav">
        <ul>
          <li><a href="index.php?c" style="text-decoration: none">Accueil</a></li>
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
          <li><a href="index.php?c=forum" style="text-decoration: none">Forum</a></li>

          <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a class="" href="index.php?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>

          <li class="last"><a href="gallery.php" class="active" style="text-decoration: none">Galeries</a>
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
            <input type="text" name="recherche" value="" placeholder="Rechercher par thème ou rubrique..." />
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <?php
if(isset($_POST['submitform'])){
  //var_dump($_POST);exit;

  if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){//si ces champs sont remplis -> ligne 33

  $nom		= trim($_POST['nom']);
  $email		= trim($_POST['email']);
  $telephone		= trim($_POST['telephone']);
  $objet		= trim($_POST['objet']);
  $message		= trim($_POST['message']);
  $date_message		= trim($_POST['date_message']);
  $mois_message		= trim($_POST['mois_message']);
  $annee_message		= trim($_POST['annee_message']);

  $AjouterMessages = new Messages (NULL,$nom,$email,$telephone,$objet,$message,$date_message,$mois_message,$annee_message);

  $reponse = $AjouterMessages->ajoutMessages();
  if($reponse){
    echo "
        <script language='JavaScript'>
        alert('Effectué avec succès');
        document.location.replace('gallery.php');
        </script>
    ";
  }
  }//le msg est envoyé


  }

?>
  <!-- ####################################################################################################### -->
  <div class="wrapper row3">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <div id="gallery" class="clear">
        <h2 class="title" style="color: #DAA520;">Toutes les vid&#233;os</h2>
        <ul>
          <?php
              for($i=0; $i < count($results->data); $i++) {
            ?>

          <li style="width: 296px; height: 350px"><video controls src="videos/<?php echo $results->data[$i]['videos']?>"
              style="width: 100%; height:65%"></video>
            <br><br>
            <h4><?php echo $results->data[$i]['theme']?></h4>
            <p><?php echo $results->data[$i]['rubrique']?></p>
          </li>


          <?php }?>
        </ul>

      </div>
      <!-- ####################################################################################################### -->
      <div class="center">
        <?php
        echo $paginator->createLinks($links);
      ?>

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
  <script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>


  <script src="js/all.js"></script>

</body>

</html>