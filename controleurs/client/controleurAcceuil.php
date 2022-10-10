<?php
include('modeles/classe_messages.php');
include('modeles/classe_news.php');

	$News = new Videos(NULL,NULL,NULL,NULL,NULL,NULL);

	$aff = $News->afficheNews();
	$af = $News->affiche2News();
	$afFaf = $News->afficheFaf();
	$afEa = $News->afficheEa();
	$afTr = $News->afficheTr();
	$afQa = $News->afficheQa();
	$afAa = $News->afficheAa();
	$afQr = $News->afficheQr();
	$afJtr = $News->afficheJtr();
	$afIg = $News->afficheIg();
	$afId = $News->afficheId();
	$afOracle = $News->afficheOracle();
	$afPf = $News->affichePf();
	$afGr = $News->afficheGr();
	$afZapping = $News->afficheZapping();
	$afDecouverte = $News->afficheDecouverte();
	$afPq = $News->affichePq();

	if(isset($_POST['submitform'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])){//si ces champs sont remplis -> ligne 33

		$nom		= htmlentities(trim($_POST['nom']));
		$email		= htmlentities(trim($_POST['email']));
		$telephone		= htmlentities(trim($_POST['telephone']));
		$objet		= htmlentities(trim($_POST['objet']));
		$message		= htmlentities(trim($_POST['message']));
		$date_message		= htmlentities(trim($_POST['date_message']));
		$mois_message		= htmlentities(trim($_POST['mois_message']));
		$annee_message		= htmlentities(trim($_POST['annee_message']));

		$AjouterMessages = new Messages (NULL,$nom,$email,$telephone,$objet,$message,$date_message,$mois_message,$annee_message);

		$reponse = $AjouterMessages->ajoutMessages();
		if($reponse){
			echo "
					<script language='JavaScript'>
					alert('Effectué avec succès');
					document.location.replace('index.php');
					</script>
			";
		}
		}//le msg est envoyé


		}




	include ('vues/client/acceuil.php');
?>