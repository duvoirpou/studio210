<?php 
	class reponses
	{
		private $id_rep;
		private $id_commentaire;
		private $id_vid;
		private $reponses;
		private $id_user;
		private $annee_reponse;
		private $heure_reponse;
		private $minute_reponse;
		private $date_reponse;
		
		

		public function __construct($id_rep,$id_commentaire,$id_vid,$reponses,$id_user,$annee_reponse,$heure_reponse,$minute_reponse,$date_reponse)
					{
						$this->id_rep= $id_rep;
						$this->id_commentaire= $id_commentaire;
						$this->id_vid= $id_vid;
						$this->reponses=$reponses;
						$this->id_user=$id_user;
						$this->annee_reponse=$annee_reponse;
						$this->heure_reponse=$heure_reponse;
						$this->minute_reponse=$minute_reponse;
						$this->date_reponse=$date_reponse;
					} 

		/*LISTE DES GETTERS*/
		
		public function getId_rep()
		{
			return $this->id_rep;
		}
		
		public function getId_commentaire()
		{
			return $this->id_commentaire;
		}
		
		
		public function getId_vid()
		{
			return $this->id_vid;
		}
		
		public function getReponses()
		{
			return $this->reponses;
		}	

			public function getId_user()
		{
			return $this->id_user;
		}
		
			public function getAnnee_reponse()
		{
			return $this->annee_reponse;
		}
			public function getHeure_reponse()
		{
			return $this->heure_reponse;
		}
		
		
		
			public function getMinute_reponse()
		{
			return $this->minute_reponse;
		}
		
	public function getDate_reponse()
		{
			return $this->date_reponse;
		}

		
		/*LISTE DES SETTERS*/
		
		public function setId_rep($id_rep)
		{
			$this->id_rep = $id_rep;
		}
		
		
		public function setId_commentaire($id_commentaire)
		{
			$this->id_commentaire = $id_commentaire;
		}
		
		
		public function setReponses($reponses)
		{
			$this->reponses = $reponses;
		}

		
		
		public function setId_user($id_user)
		{
			$this->id_user = $id_user;
		}
		
		
		
		
		public function setAnnee_reponse($annee_reponse)
		{
			$this->annee_reponse = $annee_reponse;
		}
		
		
		
		public function setHeure_reponse($heure_reponse)
		{
			$this->heure_reponse = $heure_reponse;
		}
		
		
		public function setDate_reponse($date_reponse)
		{
			$this->date_reponse = $date_reponse;
		}

		/*METHODE QUI PERMET D'AJOUTER UN reponses*/
		public function ajoutReponse(){
			
			$bdd = connexionBdd();
			//requête pour éviter la redendance des message
			/* $request = $bdd->prepare("SELECT * FROM client WHERE message=:message");
			$result = $request->execute(array(
												':message'=>$this->message
											));
											
			$result=$request->fetchobject(); */
			
			

			//vérification pour s'avoir si l'objet existe
			//if(!is_object($result)){

				 $request = $bdd->prepare("INSERT INTO `reponses` (`id_rep`, `id_commentaire`, `id_vid`, `reponses`, `id_user`, `annee_reponse`, `heure_reponse`, `minute_reponse`, `date_reponse`) VALUES (:id_rep,:id_commentaire,:id_vid,:reponses,:id_user,:annee_reponse,:heure_reponse,:minute_reponse,:date_reponse)");

				$reponse = $request->execute(array(
													'id_rep'	 => NULL,
													'id_commentaire'	 => $this->id_commentaire,
													'id_vid'	 => $this->id_vid,
													'reponses' => $this->reponses,
													'id_user' => $this->id_user,
													'annee_reponse' => $this->annee_reponse,
													'heure_reponse' => $this->heure_reponse,
													'minute_reponse' => $this->minute_reponse,
													'date_reponse' => $this->date_reponse
												)); //var_dump($reponse); die();
			return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				 //}
		}

		
		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		//SELECT * FROM reponses INNER JOIN user ON reponses.id_commentaire = user.id_user ORDER BY id_commentaire DESC LIMIT 5
		
		public function affichageReponse(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM reponses INNER JOIN commentaires ON reponses.id_commentaire=commentaires.id_commentaire ORDER BY `id_rep` DESC LIMIT 5");
			$requete->execute();
			
			return $requete;
		}
		
		
		public function affichageReponses(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM `reponses` INNER JOIN commentaires ON reponses.`id_commentaire`=commentaires.`id_commentaire` INNER JOIN user ON commentaires.`id_user`=user.`id_user` ORDER BY `id_rep` DESC");
			$requete->execute();
			
			return $requete;
		}
		
		
		
		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdReponse($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `reponses` WHERE id_rep=?");
			$params=array($code);
			$request->execute($params);
			$reponse=$request->fetch();

			return $reponse; 
		}
		
		
		
		
		

		}


		
//======================================================================	
	
	
?>