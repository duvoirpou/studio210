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
        <li><a href="?c" style="text-decoration: none">Accueil</a></li>
        <li><a href="#" style="text-decoration: none">Rubriques</a>
          <ul style="width: 152px;" >
            <li ><a href="?c=R_f_a_f" style="text-decoration: none" class="sousMenu"><b>Face-&agrave;-face</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Questions d'actualit&eacute;</b></a></li>
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Jt religions</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Entretien avec</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Arts et &acirc;me</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Temps du reveil</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Questions R&eacute;ponses</b></a></li>
						
						
						
						
						
          </ul>
          
          <ul style="width: 152px; margin-left: 152px; height: 234px" >
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Interview &agrave; domicile</b></a></li>
						
            <li><a href="#" style="text-decoration: none" class="sousMenu"><b>Oracle</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Parole aux femmes</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Grand reportage</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>210 zapping</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>D&eacute;couverte</b></a></li>
						<li><a href="#" style="text-decoration: none" class="sousMenu"><b>Piq&ucirc;re d'histoire</b></a></li>
						
          </ul>
        </li>
        <li><a href="?c=forum" style="text-decoration: none">Forum</a></li>
        
         <?php
				if(!isset($_SESSION['nom_user'])){
				echo '<li><a class="" href="?c=compte" style="text-decoration: none"><b>Mon Compte</b></a></li>';}
			?>
        
        <li class="last"><a class="active" href="#" style="text-decoration: none">Galeries</a>
						<ul style="width: 106px;" >
            <li ><a href="#" style="width: 106px; text-decoration: none" class="sousMenu"><b>Images</b></a></li>
            <li><a href="?c=gal" style="width: 106px; text-decoration: none" class="sousMenu"><b>Vid&eacute;os</b></a></li>
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
<div class="wrapper row3">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="gallery" class="clear">
      <h2 class="title" style="color: #DAA520;">Toutes les vid&#233;os</h2>
      <ul>
        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li class="last" style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        
        
        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li class="last" style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li class="last" style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
	  
	  
	  
	  
	  
	  
	  
		
        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
        <li class="last" style="width: 300px"><video controls src="videos/Gianna_-_Rino_Gaetano__28testo_29 (1).mp4" style="width: 300px"></video></li>
		
	  
	  
	  </ul>
    </div>
    <!-- ####################################################################################################### -->
    <div class="center" style="">
      <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#" >2</a>
        <a href="#">3</a>
        
        <a href="#">&raquo;</a>
      </div>
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
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>


<script src="js/all.js"></script>

</body>
</html>