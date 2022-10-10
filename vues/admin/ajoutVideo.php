<?php
	if(!$_SESSION['id_admin']){
		header('location:?c=admin');
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
	<link rel="stylesheet" href="assets/bootstrap/bootstrap4/css/bootstrap.min.css" />

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
					<li class=""><a href="?c=espadmin">Accueil</a></li>
					<li class=""><a href="?c=affMbre" style="text-decoration: none;">Users</a></li>
					<li class=""><a href="?c=msg" style="text-decoration: none;">Messages</a></li>
					<li class=""><a href="?c=ajSuj" style="text-decoration: none;">sujet au forum</a></li>
					<li><a class="active" href="#" style="text-decoration: none;">Vidéos</a>
						<ul style="width: 152px;">
							<li><a href="?c=insV" style="text-decoration: none" class="sousMenu"><b>Ajouter</b></a></li>
							<li><a href="?c=videos" style="text-decoration: none" class="sousMenu"><b>Voir par rubrique</b></a>
							</li>
						</ul>
					</li>
					<li class=""><a href="?c=dcnx_ad" style="text-decoration: none;"><b>Déconnexion</b></a></li>


				</ul>
			</div>

		</div>
	</div>
	<div class="container" style="margin-top:150px;">
		<div class="card">

			<div class="card-header text-center bg-primary text-white">
				<h5>Ajouter une vidéo</h5>
			</div>
			<div clas="card-body" style="padding: 20px;">
				<form id="uploadForm" style="margin-top:30px;" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="theme">Thème </label>
						<input type="text" class="form-control" name="theme" id="theme"
							placeholder="thème de l'émission" required/>
					</div>

					<div class="form-group">
						<label for="message">Message :<br />
							<textarea class="form-control" id="message" name="msg_videos" cols="150" rows="4" placeholder="résumé de lémission" required></textarea>
						</label>
					</div>


					<div class="form-group">
						<label for="rubrique">Rubrique</label>
						<select required class="form-control" name="rubrique" id="rubrique" >

							<!--<optgroup label="Rubrique">-->
								<option value=""></option>

								<option value="Face-à-face">Face-à-face</option>
								<option value="Questions d'actualité">Questions d'actualité</option>
								<option value="Jt religions">Jt religions</option>
								<option value="Entretien avec">Entretien avec</option>
								<option value="Arts et âme">Arts et âme</option>
								<option value="Temps du reveil">Temps du reveil</option>
								<option value="Questions Réponses">Questions Réponses</option>
								<option value="Interview à domicile">Interview à domicile</option>
								<option value="Oracle">Oracle</option>
								<option value="Parole aux femmes">Parole aux femmes</option>
								<option value="Grand reportage">Grand reportage</option>
								<option value="210 zapping">210 zapping</option>
								<option value="Découverte">Découverte</option>
								<option value="Piqure d'histoire">Piqure d'histoire</option>
								<option value="Instant gospel">Instant gospel</option>


							<!--</optgroup>-->





						</select></div>

					<div class="form-group">
						<label for="date_video">Date de l'émission</label>
						<input type="date" class="form-control" name="date_video" id="date_video" placeholder="" required/>
					</div>





					<div class="form-group">
						<label for="videos" class="control-label">Vidéo : </label>
						<input type="file" name="videos" class="form-control-file" id="videos" placeholder="videos" required/>
					</div>

					<!--<div class="form-group">
					<label for="id_admin ">id_admin </label>
					<input type="text" class="form-control" name="id_admin" id="id_admin" value="1" hidden />
				</div>-->
					<input type="hidden" name="enregistrer" />
					<button type="submit" class="btn btn-success">Enregistrer</button>
					<br>
					<br>


				</form>
				<div class="progress" style="height: 35px;">
					<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
						style="width: 0%">
						<span class="sr-only">0% Complete</span>
					</div>

				</div><br>
				<div id="msg"></div>
			</div>

		</div>





	</div>




	<!------------------------------------------>
	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.form.js"></script>
	<script src="assets/bootstrap/bootstrap4/js/bootstrap.min.js"></script>
	<script src="js/upload.js"></script>
	<script>
		// $(document).ready(function(){
		// 	$('#uploadForm').submit(function(e){
		// 		if($('#videos').val()){
		// 			e.preventDefault();
		// 			$('#loader-icon').show();
		// 			$(this).ajaxSubmit({
		// 				target: "#targetLayer",
		// 				beforeSubmit: function(){
		// 					$('.progress-bar').width('0%')
		// 				},
		// 				uploadProgress: function(event, position, total, percentComplete){
		// 					$(".progress-bar").width(percentComplete+'%');
		// 					$(".progress-bar").html('<div id="progress-status">'+percentComplete+' %</div>');
		// 				},
		// 				success: function(){
		// 					$('#loader-icon').hide()
		// 				},
		// 				resetForm: true
		// 			});
		// 			return: false
		// 		}
		// 	});
		// });
	</script>

</body>

</html>