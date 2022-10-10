<?php
include('modeles/classe_commentaire.php');

	if(isset($_POST['envoyer'])){
		//var_dump($_POST);exit;
		
		if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){//si ces champs sont remplis -> ligne 33

		$nom		= htmlentities(trim($_POST['nom']));
		
		$email		= htmlentities(trim($_POST['email']));
		$message		= htmlentities(trim($_POST['message']));
		
		
		

		
		$AjouterCommentaire = new Commentaire (NULL,$nom,$email,$message);
	
		$reponse = $AjouterCommentaire->ajoutCommentaire();

			
			
			
			
		if($reponse){//si le message est envoyé
			
			header('location:?c=fiche');//on revient sur la page "commentaire"
			
		}else{//sinon on revient sur la page "commentaire"
			header('location:?c=fiche');
		}
		}//le msg est envoyé
		
		
		
		
		
		}
	include('vues/client/footer2.php');

?>






