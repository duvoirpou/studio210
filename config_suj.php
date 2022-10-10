<?php
	ini_set('display_errors', 'off');
	try{
		$dbh = new PDO('mysql:host=localhost;dbname=studio;charset=utf8', 'root', '');

	}catch(PDOException $e){
		print "Erreur!: " . $e->getMessage() . "<br>";
		die();
	}


	$limit = ( isset($_GET['limit']) ) ? $_GET['limit'] : 9;
	$page = ( isset($_GET['page']) ) ? $_GET['page'] : 1;
	$links = ( isset($_GET['links']) ) ? $_GET['links'] : 7;

	$_SESSION['limit'] = $limit;
	$_SESSION['page'] = $page;

	if(isset($_POST['go'])){
		//var_dump($_POST);die();
		if(!empty($_POST['rechercher'])){
			$_SESSION['rechercher']		= trim($_POST['rechercher']);
			//var_dump(trim($_POST['recherche']));die();
			header('location:rechercher_forum.php');

		}
	}

	$var_id_sjt = $_SESSION['id_sujet'];
	$query = "SELECT * FROM `commentaires` INNER JOIN user ON commentaires.id_user=user.id_user WHERE `id_sujet`=$var_id_sjt ORDER BY `id_commentaire` DESC ";

	require_once 'paginator.class.php';
	$paginator = new Paginator($dbh, $query);
	$results = $paginator->getData($limit, $page);




//======================================================================


?>