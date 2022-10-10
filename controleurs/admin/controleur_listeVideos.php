<?php

	include('modeles/classe_news.php');

	$listeVideos = new Videos(NULL,NULL,NULL,NULL,NULL,NULL);

	$aff = $listeVideos->afficheVideos();


	if(isset($_GET['code'])){

		$code=$_GET['code'];

		$ModifierMessages = new Messages(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$messages = $ModifierMessages->getIdMessages($code);

	}



	include('vues/admin/videos.php');
?>






