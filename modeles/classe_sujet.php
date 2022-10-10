<?php
	class sujets
	{
		private $id_sujet;
		private $sujet;
		private $date_sujet;





		public function __construct($id_sujet,$sujet,$date_sujet)
					{
						$this->id_sujet= $id_sujet;
						$this->sujet=$sujet;
						$this->date_sujet=$date_sujet;


					}

		/*LISTE DES GETTERS*/

		public function getId_sujet()
		{
			return $this->id_sujet;
		}

		public function getSujet()
		{
			return $this->sujet;
		}






		/*LISTE DES SETTERS

		public function setId_commentaire($id_messages)
		{
			$this->id_messages = $id_messages;
		}

		public function setNom($nom)
		{
			$this->nom = $nom;
		}


		public function setMessage($message)
		{
			$this->message = $message;
		}	*/



		/*METHODE QUI PERMET D'AJOUTER UN commentaire*/
		public function ajoutSujets(){

			$bdd = connexionBdd();
			//requête pour éviter la redendance des message
			/* $request = $bdd->prepare("SELECT * FROM client WHERE message=:message");
			$result = $request->execute(array(
												':message'=>$this->message
											));

			$result=$request->fetchobject(); */



			//vérification pour s'avoir si l'objet existe
			//if(!is_object($result)){

				 $request = $bdd->prepare("INSERT INTO `sujets` (id_sujet,sujet,date_sujet) VALUES (:id_sujet,:sujet,:date_sujet)");

				$reponse = $request->execute(array(
													'id_sujet'	 => NULL,
													'sujet' => $this->sujet,

													'date_sujet' => $this->date_sujet,

												)); //var_dump($reponse); die();
			return $reponse;

			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				 //}
		}


		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		public function affichageSujets(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM sujets ORDER BY id_sujet DESC LIMIT 1");
			$requete->execute();

			return $requete;
		}

		public function affichageRechSujets(){
			$bdd = connexionBdd();
			$var = $_SESSION['rechercher'];
			$requete = $bdd->prepare("SELECT * FROM `commentaires` JOIN user ON commentaires.id_user=user.id_user JOIN sujets ON commentaires.id_sujet=sujets.id_sujet WHERE sujets.sujet='$var' ORDER BY id_commentaire DESC");
			$requete->execute();

			return $requete;
		}

		//SELECT * FROM sujets INNER JOIN commentaires ON sujets.id_sujet=commentaires.id_sujet
		public function affichageListeSujets(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM sujets ORDER BY id_sujet DESC LIMIT 5");
			$requete->execute();

			return $requete;
		}


		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdSujets($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `sujets` WHERE id_sujet=?");
			$params=array($code);
			$request->execute($params);
			$suj=$request->fetch();

			return $suj;
		}








		}



//======================================================================


?>