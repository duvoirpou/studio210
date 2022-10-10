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
          <li style=""><a class="" href="?c" style="text-decoration: none">Accueil</a></li>
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
          <li><a href="index.php?c=forum" style="text-decoration: none">Forum</a></li>

          <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a class="" href="?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>

          <li class="last"><a href="gallery.php" style="text-decoration: none">Galeries</a>
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

    </div>
  </div>
  <!-- ####################################################################################################### -->
  <div class="wrapper row3" style="" id="home" data-spy="scroll" data-target="#navbar-example">
    <div id="container" class="clear" style="" id="navbar-example">

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


            <?php while($comm=$affComment->fetch()){?>

            <div id="latestnews" style="border-top: 1px solid gray;  padding-top: 20px;">
              <p class="readmore"><span style="float: left"><i><?php echo($comm['heure_comment'])?>h
                    <?php echo($comm['minute_comment'])?></i></span><?php echo($comm['date_comment'])?></p>
              <p style="text-align: justify; margin-top: 20px;">

                <img class="imgl" src="images/<?php echo($comm['photo'])?>" style="border-radius: 100%; " alt=""
                  width="80" height="80" />
                <strong><?php echo($comm['pseudo'])?></strong><br>
                <?php echo($comm['comment_vid'])?>
                <script>
                  /*var recupe;
                  var texte = "<?php echo($comm['comment_vid'])?>";

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


              </p><br>


              <script>
                /*var texte = "<?php echo($comm['comment_vid'])?>";
                if (texte.length > 501) {
                  document.write(
                    '<p class="readmore" style="margin-top: 20px;"><a href="?c=affNewsComm&code=<?php echo($comm['id_vid']) ?>" style="text-decoration: none;">Lire tout &raquo;</a></p>');
                } else {
                  document.write('<p class="readmore" style="margin-top: 20px;">&nbsp;</p>');
                }*/
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
                <form action="" method="post">

                <input type="number" name="id_user" placeholder="id_user" value="'.$_SESSION['id_user'].'" hidden/>
                <input type="number" name="id_videos" placeholder="id_videos" value="'.$News['id_videos'].'" hidden/>
                <input type="number" name="annee_comment" placeholder="annee_comment" value="'.$annee.'" hidden/>
                <input type="text" name="heure_comment" placeholder="heure_comment" value="'.$heure.'" hidden/>
                <input type="text" name="minute_comment" placeholder="minute_comment" value="'.$minute.'" hidden/>
                <input type="text" name="date_comment" placeholder="date_comment" value="'.$date_jour.'" hidden/>



                <!--<input class="button btn btn-default" type="submit" name="envoyer" value="Publier" style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;"/>-->

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

      <!-- ####################################################################################################### -->
    </div>

    <!-- ####################################################################################################### -->
  </div>
  <div class="container" style="padding-left: 100px; margin-bottom: 50px">
    <textarea type="text" id="message" name="comment_vid" cols="40" rows="4" placeholder="Commenter..."></textarea>
    <a style="color: #B22222;" href="?c=affNews&code=<?php echo $News['id_videos']; ?>"><button class="button btn btn-default" style="background: #DAA520; color: #B22222; margin-top: -28px; margin-left: 0px;" type="submit" name="envoyer">Publier</button></a>
    <br><a style="text-decoration: none;" href="?c=affNews&code=<?php echo $News['id_videos']; ?>">Actualisez</a>
    </form>
  </div>
  <div class="wrapper col5">
    <?php
		include ('footer2.php')
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

  <script>
    var current_page = 1;
    var records_per_page = 4;

    var objJson = document.getElementById('latestnews');
    // Can be obtained from another source, such as your objJson variable

    function prevPage() {
      if (current_page > 1) {
        current_page--;
        changePage(current_page);
      }
    }

    function nextPage() {
      if (current_page < numPages()) {
        current_page++;
        changePage(current_page);
      }
    }

    function changePage(page) {
      var btn_next = document.getElementById("btn_next");
      var btn_prev = document.getElementById("btn_prev");
      var listing_table = document.getElementById("affiche");
      var page_span = document.getElementById("page");

      // Validate page
      if (page < 1) page = 1;
      if (page > numPages()) page = numPages();

      listing_table.innerHTML = "";

      for (var i = (page - 1) * records_per_page; i < (page * records_per_page); i++) {
        listing_table.innerHTML += objJson[i].adName + "<br>";
      }
      page_span.innerHTML = page;

      if (page == 1) {
        btn_prev.style.visibility = "hidden";
      } else {
        btn_prev.style.visibility = "visible";
      }

      if (page == numPages()) {
        btn_next.style.visibility = "hidden";
      } else {
        btn_next.style.visibility = "visible";
      }
    }

    function numPages() {
      return Math.ceil(objJson.length / records_per_page);
    }

    window.onload = function () {
      changePage(1);
    };

    $('body').scrollspy({
      target: '#navbar-example'
    })
  </script>
</body>

</html>