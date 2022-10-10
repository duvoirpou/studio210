<?php

	include('modeles/classe_commentaire.php');
include ('modeles/classe_user.php');
	include('modeles/classe_messages.php');
	include('modeles/classe_reponse.php');
	include('modeles/classe_commentaires_vid.php');
	/* $photo_client	   = NULL; */

	
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
			header('location:?c=forum');
		}else{
			header('location:?c=forum');
		}
		}//le msg est envoyé
		
		
		}
	
	
	
	if(isset($_POST['envoyer'])){
		var_dump($_POST);exit;
		
		$id_commentaire		= htmlentities(trim($_POST['id_commentaire']));
		
		$reponses		= htmlentities(trim($_POST['reponses']));
		
		$id_user		= htmlentities(trim($_POST['id_user']));
		$annee_reponse		= htmlentities(trim($_POST['annee_reponse']));
		$heure_reponse		= htmlentities(trim($_POST['heure_reponse']));
		$minute_reponse		= htmlentities(trim($_POST['minute_reponse']));
		$date_reponse		= htmlentities(trim($_POST['date_reponse']));
		
		
		

		
		$AjouterReponse = new Reponses(NULL,$id_commentaire,$reponses,$id_user,$annee_reponse,$heure_reponse,$minute_reponse,$date_reponse);
	
		$reponse = $AjouterReponse->ajoutReponse();

			
		/*	$varId_news=$_SESSION['id_news'];
			
			
		if($reponse){//si le message est envoyé
			
			header('location:?c=affNews&code=$varId_news');//on revient sur la page "commentaire"
			
		}else{//sinon on revient sur la page "commentaire"
			header('location:?c=affNews&code=$varId_news');
		}*/
		}//le msg est envoyé
	
	
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierCommentaires = new Commentaires_video(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$Co = $ModifierCommentaires->getIdCommentaires($code);

	}
	
	
	
	
	$R = new Reponses(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
		$affReponse = $R->affichageReponse();
		
	
	
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierCommentaires = new Commentaires(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$Commentaires = $ModifierCommentaires->getIdCommentaires($code);

	}

	include('vues/client/AffCommentaires.php');

?>

 	 	 	




