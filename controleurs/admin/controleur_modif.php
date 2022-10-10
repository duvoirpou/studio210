<?php

	include('modeles/classe_user.php');

	/* $photo	   = NULL; */

	if(isset($_POST['modif'])){
		$id_user	 = htmlentities(trim($_POST['id_user']));
		$nom_user	 = htmlentities(trim($_POST['nom_user']));
			$prenom_user	 = htmlentities(trim($_POST['prenom_user']));
			$tel	 = htmlentities(trim($_POST['tel']));
			$pseudo	 = htmlentities(trim($_POST['pseudo']));
			$mpass	 = htmlentities(trim($_POST['mpass']));
			$photo	= htmlentities(trim($_FILES['photo']['name']));
			$permis	 = htmlentities(trim($_POST['permis']));
		
		
		//tmp_name est un dossier temporaire
		$fichierTempo=$_FILES['photo']['tmp_name'];
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		move_uploaded_file($fichierTempo, 'images/'.$photo);
		
		$ModifierMembre = new User ($id_user,$nom_user,$prenom_user,$tel,$pseudo,$mpass,$photo,$permis);
		
		$reponse = $ModifierMembre->ModifierMembre();
		 //var_dump($reponse); die(); 
		if($reponse){
			header('location:?c=affMbre');
		} 
	}
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierMembre = new User (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$user = $ModifierMembre->getIdUser($code);

	}

	include('vues/admin/formModif_client.php');

?>

 	 	 	




