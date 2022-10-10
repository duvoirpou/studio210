<?php
include('modeles/admin/classe_sujet.php');

	if(isset($_POST['enregistrer'])){
		//var_dump($_POST);exit;
		
		if(!empty($_POST['sujet']) AND !empty($_POST['date_sujet'])){//si ces champs sont remplis -> ligne 33

		$sujet		= htmlentities(trim($_POST['sujet']));
		
		$date_sujet		= htmlentities(trim($_POST['date_sujet']));
		
		
		

		
		$AjouterSujets = new Sujets (NULL,$sujet,$date_sujet);
	
		$reponse = $AjouterSujets->ajoutSujets();

			
			
			
			
		if($reponse){//si le message est envoyé
			
			header('location:?c=espadmin');//on revient sur la page "commentaire"
			
		}else{//sinon on revient sur la page "commentaire"
			header('location:?c=espadmin');
		}
		}//le msg est envoyé
		
		
		
		
		
		}
	include('vues/admin/ajSujet.php');

?>






