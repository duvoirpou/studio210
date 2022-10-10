<?php
	include('modeles/client/classe_client.php');

	$SupprimerMembre = new Eleve(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

	$suppression = $SupprimerMembre->supprimerEleve();
	
	if($suppression){
		header('location:?c=affMbre');
	}
?>