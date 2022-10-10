<?php

	include('modeles/classe_messages.php');

	$listeMessages = new Messages(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

	$aff = $listeMessages->affichageMessages();


	if(isset($_GET['code'])){

		$code=$_GET['code'];

		$ModifierMessages = new Messages(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$messages = $ModifierMessages->getIdMessages($code);

	}



	include('vues/admin/messages.php');
?>






