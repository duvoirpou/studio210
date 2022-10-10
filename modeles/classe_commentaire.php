<?php
	class commentaires
	{
		private $id_commentaire;
		private $id_sujet;
		private $commentaire;
		private $id_user;

		private $annee_commentaire;
		private $heure_commentaire;
		private $minute_commentaire;
		private $date_commentaire;



		public function __construct($id_commentaire,$id_sujet,$commentaire,$id_user,$annee_commentaire,$heure_commentaire,$minute_commentaire,$date_commentaire)
					{
						$this->id_commentaire= $id_commentaire;
						$this->id_sujet= $id_sujet;
						$this->commentaire=$commentaire;

						$this->id_user=$id_user;

						$this->annee_commentaire=$annee_commentaire;
						$this->heure_commentaire=$heure_commentaire;
						$this->minute_commentaire=$minute_commentaire;
						$this->date_commentaire=$date_commentaire;
					}

		/*LISTE DES GETTERS*/

		public function getId_commentaire()
		{
			return $this->id_commentaire;
		}

		public function getId_sujet()
		{
			return $this->id_sujet;
		}

		public function getNom()
		{
			return $this->commentaire;
		}

			public function getId_user()
		{
			return $this->id_user;
		}

			public function getAnnee_commentaire()
		{
			return $this->annee_commentaire;
		}
			public function getHeure_commentaire()
		{
			return $this->heure_commentaire;
		}



			public function getMinute_commentaire()
		{
			return $this->minute_commentaire;
		}

	public function getDate_commentaire()
		{
			return $this->date_commentaire;
		}


		/*LISTE DES SETTERS*/

		public function setId_commentaire($id_commentaire)
		{
			$this->id_commentaire = $id_commentaire;
		}

		public function setNom($commentaire)
		{
			$this->commentaire = $commentaire;
		}


		public function setMessage($message)
		{
			$this->message = $message;
		}

		public function setId_user($id_user)
		{
			$this->id_user = $id_user;
		}

		/*METHODE QUI PERMET D'AJOUTER UN commentaires*/
		public function ajoutCommentaires(){

			$bdd = connexionBdd();
			//requête pour éviter la redendance des message
			/* $request = $bdd->prepare("SELECT * FROM client WHERE message=:message");
			$result = $request->execute(array(
												':message'=>$this->message
											));

			$result=$request->fetchobject(); */



			//vérification pour s'avoir si l'objet existe
			//if(!is_object($result)){

				 $request = $bdd->prepare("INSERT INTO `commentaires` (id_commentaire,id_sujet,commentaire,id_user,annee_commentaire,heure_commentaire,minute_commentaire,date_commentaire) VALUES (:id_commentaire,:id_sujet,:commentaire,:id_user,:annee_commentaire,:heure_commentaire,:minute_commentaire,:date_commentaire)");

				$reponse = $request->execute(array(
													'id_commentaire'	 => NULL,
													'id_sujet' => $this->id_sujet,
													'commentaire' => $this->commentaire,
													'id_user' => $this->id_user,
													'annee_commentaire' => $this->annee_commentaire,
													'heure_commentaire' => $this->heure_commentaire,
													'minute_commentaire' => $this->minute_commentaire,
													'date_commentaire' => $this->date_commentaire
												)); //var_dump($reponse); die();
			return $reponse;

			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				 //}
		}


		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		//SELECT * FROM commentaires INNER JOIN user ON commentaires.id_commentaire = user.id_user ORDER BY id_commentaire DESC LIMIT 5

		public function affichageCommentaires(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM commentaires INNER JOIN user ON commentaires.id_user=user.id_user ORDER BY id_commentaire DESC");
			$requete->execute();

			return $requete;
		}

		//selection de 500 elements à partir du 500è par ordre décroissant
		public function affichageCommentaires2(){
			$bdd = connexionBdd();
			$var_id_sjt = $_SESSION['id_sujet'];
			$requete = $bdd->prepare("SELECT * FROM `commentaires` INNER JOIN user ON commentaires.id_user=user.id_user WHERE `id_sujet`=$var_id_sjt ORDER BY `id_commentaire` DESC LIMIT 500,500");
			$requete->execute();

			return $requete;
		}

		//selection de 500 elements à partir du 1000è par ordre décroissant
		public function affichageCommentaires3(){
			$bdd = connexionBdd();
			$var_id_sjt = $_SESSION['id_sujet'];
			$requete = $bdd->prepare("SELECT * FROM `commentaires` INNER JOIN user ON commentaires.id_user=user.id_user WHERE `id_sujet`=$var_id_sjt ORDER BY `id_commentaire` DESC LIMIT 1000,500");
			$requete->execute();

			return $requete;
		}


		public function affichageCommentairesSujets(){
			$bdd = connexionBdd();

			if(isset($_SESSION['id_sujet'])){
			$var_id_sjt = $_SESSION['id_sujet'];
			$requete = $bdd->prepare("SELECT * FROM `commentaires` INNER JOIN user ON commentaires.id_user=user.id_user WHERE `id_sujet`=$var_id_sjt ORDER BY `id_commentaire` DESC LIMIT 10");

			$requete->execute();

			return $requete;}

			else {
			$requete = $bdd->prepare("SELECT * FROM commentaires INNER JOIN user ON commentaires.id_user=user.id_user ORDER BY id_commentaire DESC LIMIT 10");
			$requete->execute();

			return $requete;
			}
		}




		public function affichageCommentairesSujetSelect(){
			$bdd = connexionBdd();


			$id_sujets = $_SESSION['id_sujets'];
			$requete = $bdd->prepare("SELECT * FROM `commentaires` INNER JOIN user ON commentaires.id_user=user.id_user WHERE `id_sujet`=$id_sujets ORDER BY `id_commentaire` DESC LIMIT 10");

			$requete->execute();

			return $requete;


		}


		public function affichageCommentairesSujetSelect2(){
			$bdd = connexionBdd();


			$id_sujets = $_SESSION['id_sujets'];
			$requete = $bdd->prepare("SELECT * FROM `commentaires` INNER JOIN user ON commentaires.id_user=user.id_user WHERE `id_sujet`=$id_sujets ORDER BY `id_commentaire` DESC LIMIT 10,10");

			$requete->execute();

			return $requete;


		}



		public function affichageCommentairesSujetSelect3(){
			$bdd = connexionBdd();


			$id_sujets = $_SESSION['id_sujets'];
			$requete = $bdd->prepare("SELECT * FROM `commentaires` INNER JOIN user ON commentaires.id_user=user.id_user WHERE `id_sujet`=$id_sujets ORDER BY `id_commentaire` DESC LIMIT 20,10");

			$requete->execute();

			return $requete;


		}


		/*public function affichageCommentairesR(){
			$bdd = connexionBdd();
			$var = $_SESSION['id_commentaire'];
			$requete = $bdd->prepare("SELECT * FROM commentaires INNER JOIN user ON commentaires.id_user=user.id_user WHERE `id_commentaire`=$var ORDER BY id_commentaire DESC");
			$requete->execute();

			return $requete;
		} */

		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdCommentaires($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `commentaires` INNER JOIN user ON commentaires.`id_user`=user.`id_user` WHERE id_commentaire=?");
			$params=array($code);
			$request->execute($params);
			$commentaire=$request->fetch();

			return $commentaire;
		}






		}



//======================================================================


?>