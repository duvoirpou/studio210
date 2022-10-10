<?php

	include('modeles/classe_videos.php');

	/* $photo_client	   = NULL; */

	if(isset($_POST['modifNews'])){
		$id_video      = htmlentities(trim($_POST['id_video']));
		$theme_video      = htmlentities(trim($_POST['theme_video']));
		$commentaire_video	   	= htmlentities(trim($_POST['commentaire_video']));
		$chemin	   	= htmlentities(trim($_POST['chemin']));
		$rubrique	   	= htmlentities(trim($_POST['rubrique']));
		
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		
		$ModifierNews = new Video($id_video,$theme_video,$commentaire_video,$chemin,$rubrique);
	
		$reponse = $ModifierNews->ModifierNews();
		
		if($reponse){
			header('location:?c=affMbre');
		}
	}
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierNews = new Video(NULL,NULL,NULL,NULL,NULL);
		$News = $ModifierNews->getIdNews($code);

	}

	include('vues/client/AffNews.php');

?>

 	 	 	




