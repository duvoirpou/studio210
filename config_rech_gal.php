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
		if(!empty($_POST['recherche'])){
			$_SESSION['recherche']		= trim($_POST['recherche']);
			//var_dump(trim($_POST['recherche']));die();
			header('location:rechercher_gallery.php');

		}
	}

$var = $_SESSION['recherche'];
//var_dump($var);die();
$query = "SELECT * FROM `videos` WHERE videos.theme LIKE '%$var%' OR videos.rubrique LIKE '%$var%' ORDER BY id_videos DESC";


require_once 'paginator.class.php';
$paginator = new Paginator($dbh, $query);
$results = $paginator->getData($limit, $page);




//======================================================================


?>