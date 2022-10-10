<?php
ini_set('display_errors', 'off');
	include('modeles/classe_user.php');
	include('modeles/classe_messages.php');
	include('modeles/classe_commentaire.php');
	include('modeles/classe_sujet.php');


	if(isset($_POST['valider'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['pseudo']) AND !empty($_POST['mpass'])){

		$pseudo	= htmlentities(trim($_POST['pseudo']));
		$mpass		= htmlentities(trim($_POST['mpass']));


		$cnxUser = new User (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

		$reponse = $cnxUser->connexionSiteUser($pseudo,$mpass);

		if($reponse){

			//ajout des sessions
						$_SESSION['id_user']		=$reponse->id_user;
						$_SESSION['nom_user']		=$reponse->nom_user;
						$_SESSION['prenom_user']		=$reponse->prenom_user;
						$_SESSION['sexe']		=$reponse->sexe;

						$_SESSION['pseudo']	=$reponse->pseudo;
						$_SESSION['mpass']		=$reponse->mpass;
						$_SESSION['tel']		=$reponse->tel;

			header('location:?c=forum');
		}else{
			header('location:?c=forum');
		}

	}}






	if(isset($_POST['enregistrer'])){
		if(!empty($_POST['nom_user']) AND !empty($_POST['prenom_user']) AND !empty($_POST['tel']) AND !empty($_POST['pseudo']) AND !empty($_POST['mpass']) AND !empty($_POST['confirm']) AND !empty($_POST['permis']) ){
		if($_POST['mpass']==$_POST['confirm']){



			$nom_user	 = htmlentities(trim($_POST['nom_user']));
			$prenom_user	 = htmlentities(trim($_POST['prenom_user']));
			$sexe	 = htmlentities(trim($_POST['sexe']));
			$tel	 = htmlentities(trim($_POST['tel']));
			$pseudo	 = htmlentities(trim($_POST['pseudo']));
			$mpass	 = htmlentities(trim($_POST['mpass']));
			$photo	= htmlentities(trim($_FILES['photo']['name']));
			$permis	 = htmlentities(trim($_POST['permis']));

		//tmp_name est un dossier temporaire
		$fichierTempo=$_FILES['photo']['tmp_name'];

		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		move_uploaded_file($fichierTempo, 'images/'.$photo);


			$Ins_users = new User (NULL,$nom_user,$prenom_user,$sexe,$tel,$pseudo,$mpass,$photo,$permis);

			$reponse = $Ins_users->ajoutClient();




		if($reponse){
			header('location:?c');
		}else{
			header('location:?c=forum');
		} }}}









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
			header('location:?c=forum');
		}else{
			header('location:?c=forum');
		}
		}//le msg est envoyé


		}

		$Suj = new Sujets(NULL,NULL,NULL);

		$affSujets = $Suj->affichageSujets();





		$ListSuj = new Sujets(NULL,NULL,NULL);

		$affListSuj = $ListSuj->affichageListeSujets();


	if(isset($_POST['publier'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['commentaire']) AND !empty($_POST['id_user'])){//si ces champs sont remplis -> ligne 33
		$id_sujet		= htmlentities(trim($_POST['id_sujet']));
		$commentaire		= htmlentities(trim($_POST['commentaire']));
		$id_user		= htmlentities(trim($_POST['id_user']));
		$annee_commentaire		= htmlentities(trim($_POST['annee_commentaire']));
		$heure_commentaire		= htmlentities(trim($_POST['heure_commentaire']));
		$minute_commentaire		= htmlentities(trim($_POST['minute_commentaire']));
		$date_commentaire		= htmlentities(trim($_POST['date_commentaire']));



		$AjouterCommentaires = new Commentaires (NULL,$id_sujet,$commentaire,$id_user,$annee_commentaire,$heure_commentaire,$minute_commentaire,$date_commentaire);

		$reponse = $AjouterCommentaires->ajoutCommentaires();
	if($reponse){
			header('location:?c=forum');
		}else{
			header('location:?c=forum');
		}
		}//le msg est envoyé


		}


		$Commentaires = new Commentaires(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

		$affCommentaires = $Commentaires->affichageCommentaires();


if(isset($_POST['go'])){
		//var_dump($_POST);die();
		if(!empty($_POST['rechercher'])){
			$_SESSION['rechercher']		= trim($_POST['rechercher']);
			//var_dump(trim($_POST['recherche']));die();
			header('location:?c=rech_forum');

		}
	}






	include ('vues/client/forum.php');
?>