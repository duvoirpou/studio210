<?php
	include('modeles/classe_eleve.php');
	include('modeles/classe_registreAppel.php');
	include('modeles/classe_emplois_du_temps.php');
	include('modeles/classe_commentaire.php');
	
	
	

	$listeMembres = new Eleve (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
	$listeEleves = new Registre_appel (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
	
	$listeEmploisTemps = new Emplois_temps (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
	


	$affOct = $listeEleves->affichageControleOct();
	$affNov = $listeEleves->affichageControleNov();
	$affDec = $listeEleves->affichageControleDec();
	$affJanv = $listeEleves->affichageControleJanv();
	$affFev = $listeEleves->affichageControleFev();
	$affMars = $listeEleves->affichageControleMars();
	$affAv = $listeEleves->affichageControleAv();
	$affMai = $listeEleves->affichageControleMai();
	$affJuin = $listeEleves->affichageControleJuin();
	
	$lundi = $listeEmploisTemps->affichageEmploisTempsLundi();
	$mardi = $listeEmploisTemps->affichageEmploisTempsMardi();
	$mercredi = $listeEmploisTemps->affichageEmploisTempsMercredi();
	$jeudi = $listeEmploisTemps->affichageEmploisTempsJeudi();
	$vendredi = $listeEmploisTemps->affichageEmploisTempsVendredi();

	
	
	
	
	
	if(isset($_POST['envoyer'])){
		//var_dump($_POST);exit;
		
		if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){//si ces champs sont remplis -> ligne 33

		$nom		= htmlentities(trim($_POST['nom']));
		
		$email		= htmlentities(trim($_POST['email']));
		$message		= htmlentities(trim($_POST['message']));
		
		
		$AjouterCommentaire = new Commentaire (NULL,$nom,$email,$message);
	
		$reponse = $AjouterCommentaire->ajoutCommentaire();
	
		}//le msg est envoyé
		
		
		}
		
		
		
		
		
	
	
	
	include ('vues/client/controle.php');
?>