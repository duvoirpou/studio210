<?php
	if(!$_SESSION['id_admin']){
		header('location:?c=admin');
	}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Studio 210</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

<link rel="stylesheet" href="css/styles/layout.css" type="text/css" />


<!--<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>-->

<link rel="stylesheet" href="responsive.css" type="text/css" />
<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css" />

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

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
         <li ><a href="?c=espadmin">Accueil</a></li>

                <li ><a class="active" href="?c=affMbre" style="text-decoration: none;">Users</a></li>
								<li class=""><a href="?c=msg" style="text-decoration: none;">Messages</a></li>
								<li class=""><a href="?c=ajSuj" style="text-decoration: none;">sujet au forum</a></li>
								<li class=""><a href="?c=affMbre" style="text-decoration: none;">Vidéos</a>
									<ul style="width: 152px;" >
									<li ><a href="?c=insV" style="text-decoration: none" class="sousMenu"><b>Ajouter</b></a></li>
									<li><a href="?c=videos" style="text-decoration: none" class="sousMenu"><b>Voir par rubrique</b></a></li>
									</ul>
								</li>
                <li class=""><a href="?c=dcnx_ad" style="text-decoration: none;"><b>Déconnexion</b></a></li>

			</ul>
    </div>

  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
    <div id="container" class="clear">
        <!-- ####################################################################################################### -->
        <!--<center><img class="img" src="<?php echo $_SESSION['photo']; ?>" alt="" width="125" height="125" /></center>-->
        <!--<p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
        <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>-->

		<div class="card">

			<div class="card-body">
			<div class="table-responsive">
				<h4 class="card-title text-center">Utilisateurs</h4>
				<table class="table table-sm table-bordered table-striped" id="mydatatable">
          <thead>
								<tr>
									<th>CODE</th>
									<th>PHOTO</th>
									<th>PRENOM(s)</th>
									<th>NOM(S)</th>
									<th>PSEUDO</th>

									<!--<th style="text-align:center">ACTION</th>-->
								</tr>
							</thead>

							<tbody>
									<?php while($et=$aff->fetch()){?>
									<tr>
										<td ><?php if(($et['permis'])==1){echo '<span style="color: green;">'.($et['id_user']).'</span>'; } else{ echo '<span style="color: red;">'.($et['id_user']).'</span>'; }?></td>
										<!---affichage de la photo---->
										<td style="width:75px;height:80px;">
											<img src="images/<?php echo($et['photo'])?>" style="width:75px;height:80px;"/>
										</td>
										<td><?php echo($et['prenom_user'])?></td>
										<td><?php echo($et['nom_user'])?></td>
										<td><?php echo($et['pseudo'])?></td>





										<!---MODIFICATION--
										<td style="text-align:center">
											<a class="a_lien" style="margin-left:5px;" href="?c=modif&code=<?php echo($et['id_user'])?>">
												MODIFIER
											</a>	-->
										<!---SUPPRESSION--
											<a class="a_lien" style="margin-left:5px;" href="?c=supprClient&code=<?php echo($et['id_user'])?>">
												SUPPRIMER
											</a>
										</td>-->
									</tr>
									<?php }?>
							</tbody>
        </table>
			</div>
			</div>
		</div>

		<h1>&nbsp;</h1>
        <h2>&nbsp;</h2>
        <h3>&nbsp;</h3>
        <h4>&nbsp;</h4>
        <h5>&nbsp;</h5>
        <h6>&nbsp;</h6>
        <!-- ####################################################################################################### -->
    </div>
</div>
<!-- ####################################################################################################### -->
<script src="assets/bootstrap4/js/jquery.js"></script>

  <script src="assets/bootstrap4/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
   <script src="assets/js/dataTables.bootstrap4.min.js"></script>
  <script>
			$('#mydatatable').DataTable()
</script>
</body>
</html>