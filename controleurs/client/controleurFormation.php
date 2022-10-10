<?php
	
	include('modeles/classe_commentaire.php');
	
	
	
	
	if(isset($_POST['envoyer'])){
		//var_dump($_POST);exit;
		
		if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){//si ces champs sont remplis ->

		$nom		= htmlentities(trim($_POST['nom']));
		
		$email		= htmlentities(trim($_POST['email']));
		$message		= htmlentities(trim($_POST['message']));
		
		
		$AjouterCommentaire = new Commentaire (NULL,$nom,$email,$message);
	
		$reponse = $AjouterCommentaire->ajoutCommentaire();
	
		}//le msg est envoyé
		
		
		}
	
	include ('vues/client/forma.php');
	
?>