<?php
	if(isset($_SESSION['noms'])){
		header('location:?c=fiche');
	}
?>

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
<title>B.M.B SCHOOL</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />


<link rel="stylesheet" href="responsive.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">




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
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
        <?php include('titre.php') ?>
    </div>
    <div class="fl_right"><?php
				if(isset($_SESSION['noms_eleve'])){
      echo '<p>'.$_SESSION['noms_eleve'].' | <a href="?c=dcx_client"><b>Déconnexion</b></a></p>';}
        //else{
        //  echo '<p><a href="#"><a href="?c=connect">Compte Elève</a> | <a href="#">Compte Administrateur</a></p>';
        //}
			?>
      <!--<form action="#" method="post" id="sitesearch" style="font-size:12px;">
        <fieldset>

          <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="image" src="layout/images/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>-->
    </div>
    <div id="topnav">
      <ul>
        <li class=""><a href="?c" style="text-decoration:none">Accueil</a></li>
        <li><a href="?c=apro" style="text-decoration: none">&Agrave; propos</a></li>
        <li><a href="?c=adm" style="text-decoration: none">Administration</a></li>
        <li ><a href="?c=forma" style="text-decoration: none">Formation</a></li>
        <li><a href="?c=connect" style="text-decoration: none">Compte &#233;l&#232;ve</a></li>
          <li class="active" style="text-decoration: none"><a href="?c=gal" style="text-decoration:none">Gall&#233;rie</a></li>
          <!--<li><a href="#">This a very long link</a></li>
          <li class="last"><a href="#">This is the last</a></li>-->
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="gallery" class="clear">
      <h2 class="title">Images de l'&#233;cole</h2>
      <ul>
        <li><a href="images/bmb/SAM_0811.jpg" rel="prettyPhoto[gallery1]" title="Image 1"><img src="images/bmb/SAM_0811.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0812.jpg" rel="prettyPhoto[gallery1]" title="Image 2"><img src="images/bmb/SAM_0812.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0813.jpg" rel="prettyPhoto[gallery1]" title="Image 3"><img src="images/bmb/SAM_0813.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0814.jpg" rel="prettyPhoto[gallery1]" title="Image 4"><img src="images/bmb/SAM_0814.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0815.jpg" rel="prettyPhoto[gallery1]" title="Image 5"><img src="images/bmb/SAM_0815.jpg" alt="Title Text" /></a></li>
		
        <li class="last"><a href="images/bmb/SAM_0816.jpg" rel="prettyPhoto[gallery1]" title="Image 6"><img src="images/bmb/SAM_0816.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0817.jpg" rel="prettyPhoto[gallery1]" title="Image 7"><img src="images/bmb/SAM_0817.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0818.jpg" rel="prettyPhoto[gallery1]" title="Image 8"><img src="images/bmb/SAM_0818.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0819.jpg" rel="prettyPhoto[gallery1]" title="Image 9"><img src="images/bmb/SAM_0819.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0820.jpg" rel="prettyPhoto[gallery1]" title="Image 10"><img src="images/bmb/SAM_0820.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0821.jpg" rel="prettyPhoto[gallery1]" title="Image 11"><img src="images/bmb/SAM_0821.jpg" alt="Title Text" /></a></li>
		
        <li class="last"><a href="images/bmb/SAM_0822.jpg" rel="prettyPhoto[gallery1]" title="Image 12"><img src="images/bmb/SAM_0822.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0823.jpg" rel="prettyPhoto[gallery1]" title="Image 13"><img src="images/bmb/SAM_0823.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0824.jpg" rel="prettyPhoto[gallery1]" title="Image 14"><img src="images/bmb/SAM_0824.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0825.jpg" rel="prettyPhoto[gallery1]" title="Image 15"><img src="images/bmb/SAM_0825.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0826.jpg" rel="prettyPhoto[gallery1]" title="Image 16"><img src="images/bmb/SAM_0826.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0827.jpg" rel="prettyPhoto[gallery1]" title="Image 17"><img src="images/bmb/SAM_0827.jpg" alt="Title Text" /></a></li>
		
        <li class="last"><a href="images/bmb/SAM_0828.jpg" rel="prettyPhoto[gallery1]" title="Image 18"><img src="images/bmb/SAM_0828.jpg" alt="Title Text" /></a></li>
      
	  
	  
	  
	  
	  
	  
	  
		
        <li><a href="images/bmb/SAM_0829.jpg" rel="prettyPhoto[gallery1]" title="Image 19"><img src="images/bmb/SAM_0829.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0830.jpg" rel="prettyPhoto[gallery1]" title="Image 20"><img src="images/bmb/SAM_0830.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0831.jpg" rel="prettyPhoto[gallery1]" title="Image 21"><img src="images/bmb/SAM_0831.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0832.jpg" rel="prettyPhoto[gallery1]" title="Image 22"><img src="images/bmb/SAM_0832.jpg" alt="Title Text" /></a></li>
		
        <li><a href="images/bmb/SAM_0833.jpg" rel="prettyPhoto[gallery1]" title="Image 23"><img src="images/bmb/SAM_0833.jpg" alt="Title Text" /></a></li>
		
        <li class="last"><a href="images/bmb/SAM_0839.jpg" rel="prettyPhoto[gallery1]" title="Image 24"><img src="images/bmb/SAM_0839.jpg" alt="Title Text" /></a></li>
		
	  
	  
	  </ul>
    </div>
    <!-- ####################################################################################################### -->
    <div class="pagination">
      <ul>
        <li class="prev"><a href="?c=gal2" style="text-decoration:none">&laquo; Pr&#233;c&#233;dent</a></li>
        <li><a href="?c=gal"  style="text-decoration:none">1</a></li>
        <li><a href="?c=gal2"  style="text-decoration:none">2</a></li>
		<li><a href="#" class="splitter" style="text-decoration:none">3</a></li>
        <!--<li >&hellip;</li>
        <li><a href="#">6</a></li>
        <li class="current">7</li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li class="next"><a href="#" style="text-decoration:none">Suivant &raquo;</a></li>-->
      </ul>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
include('footer2.php');
?>
</body>
</html>