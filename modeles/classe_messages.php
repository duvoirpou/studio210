<?php
	class messages
	{
		private $id_messages;
		private $nom;
		private $email;
		private $telephone;
		private $objet;
		private $message;
		private $date_message;
		private $mois_message;
		private $annee_message;




		public function __construct($id_messages,$nom,$email,$telephone,$objet,$message,$date_message,$mois_message,$annee_message)
					{
						$this->id_messages= $id_messages;
						$this->nom=$nom;

						$this->email=$email;
						$this->telephone=$telephone;
						$this->objet=$objet;
						$this->message=$message;
						$this->date_message=$date_message;
						$this->mois_message=$mois_message;
						$this->annee_message=$annee_message;

					}

		/*LISTE DES GETTERS*/

		public function getId_commentaire()
		{
			return $this->id_messages;
		}

		public function getNom()
		{
			return $this->nom;
		}



		public function getMessage()
		{
			return $this->message;
		}


		/*LISTE DES SETTERS*/

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
		}



		/*METHODE QUI PERMET D'AJOUTER UN commentaire*/
		public function ajoutMessages(){

			$bdd = connexionBdd();
			//requête pour éviter la redendance des message
			/* $request = $bdd->prepare("SELECT * FROM client WHERE message=:message");
			$result = $request->execute(array(
												':message'=>$this->message
											));

			$result=$request->fetchobject(); */



			//vérification pour s'avoir si l'objet existe
			//if(!is_object($result)){

				 $request = $bdd->prepare("INSERT INTO `messages` (id_messages,nom,email,telephone,objet,message,date_message,mois_message,annee_message) VALUES (:id_messages,:nom,:email,:telephone,:objet,:message,:date_message,:mois_message,:annee_message)");

				$reponse = $request->execute(array(
													'id_messages'	 => NULL,
													'nom' => $this->nom,
													'email' => $this->email,
													'telephone' => $this->telephone,
													'objet' => $this->objet,

													'message' => $this->message,
													'date_message' => $this->date_message,
													'mois_message' => $this->mois_message,
													'annee_message' => $this->annee_message,
												)); //var_dump($reponse); die();
			return $reponse;

			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				 //}
		}


		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		public function affichageMessages(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM messages ORDER BY id_messages ");
			$requete->execute();

			return $requete;
		}


		public function getIdMessages($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `messages` WHERE id_messages=?");
			$params=array($code);
			$request->execute($params);
			$messages=$request->fetch();

			return $messages;
		}








		}



//======================================================================


?>