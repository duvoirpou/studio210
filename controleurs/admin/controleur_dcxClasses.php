<?php
	if(!empty($_SESSION['classes'])){
		session_destroy();
		header('Location:?c=espadmin');
	}
?>