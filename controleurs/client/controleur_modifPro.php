<?php

	include('modeles/classe_user.php');

	/* $photo	   = NULL; */

	if(isset($_POST['modif'])){ //var_dump($_POST); die();
		if(!empty($_POST['nom_user']) AND !empty($_POST['prenom_user']) AND !empty($_POST['sexe']) AND !empty($_POST['tel']) AND !empty($_POST['pseudo']) AND !empty($_POST['mpass']) AND !empty($_POST['permis']) ){
		
		$id_user	 = htmlentities(trim($_POST['id_user']));
		$nom_user	 = htmlentities(trim($_POST['nom_user']));
			$prenom_user	 = htmlentities(trim($_POST['prenom_user']));
			$sexe	 = htmlentities(trim($_POST['sexe']));
			$tel	 = htmlentities(trim($_POST['tel']));
			$pseudo	 = htmlentities(trim($_POST['pseudo']));
			$mpass	 = htmlentities(trim($_POST['mpass']));
			$photo	= htmlentities(trim($_FILES['photo']['name']));
			$permis	 = htmlentities(trim($_POST['permis']));
		
		if($photo != ""){
			$_SESSION['photo'] = $photo;
		}
		//tmp_name est un dossier temporaire
		$fichierTempo=$_FILES['photo']['tmp_name'];
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		move_uploaded_file($fichierTempo, 'images/'.$photo);
		
		$ModifierMembre = new User ($id_user,$nom_user,$prenom_user,$sexe,$tel,$pseudo,$mpass,$photo,$permis);
		
		$reponse = $ModifierMembre->ModifierMembre();
		 //var_dump($reponse); die(); 
		if($reponse){
			header('location:?c=');
		} 
	} }
	
	
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierMembre = new User (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$user = $ModifierMembre->getIdUser($code);

	}

	include('vues/client/formModifPro.php');

?>

 	 	 	




