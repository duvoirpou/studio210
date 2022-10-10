<?php

	include('modeles/classe_news.php');
	include('modeles/classe_commentaires_vid.php');
	include('modeles/classe_commentaire.php');

	/* $photo_client	   = NULL; 
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierMembre = new News(NULL,NULL,NULL,NULL,NULL,NULL);
		$news = $ModifierMembre->getIdNews($code);

	}*/
	

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

			
		/*	$varId_news=$_SESSION['id_news'];
			
			
		if($reponse){//si le message est envoyé
			
			header('location:?c=affNews&code=$varId_news');//on revient sur la page "commentaire"
			
		}else{//sinon on revient sur la page "commentaire"
			header('location:?c=affNews&code=$varId_news');
		}*/
		}}//le msg est envoyé
		
		
		
		$Commentaire = new Commentaires(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
		$affCommentaires = $Commentaire->affichageCommentaires();
		
		
		
		
		
		
		
		
		
		

	include('vues/client/AffNews.php');

?>

 	 	 	




