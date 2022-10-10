<?php
	if(!empty($_SESSION['nom_user'])){
		session_destroy();
		header('Location:?c');
	}
?>