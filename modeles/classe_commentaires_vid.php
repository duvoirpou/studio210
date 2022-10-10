<?php 
	class commentaires_video
	{
		private $id_vid;
		private $comment_vid;
		private $id_videos;
		private $id_user;
		private $annee_comment;
		private $heure_comment;
		private $minute_comment;
		private $date_comment;

		public function __construct($id_vid,$comment_vid,$id_videos,$id_user,$annee_comment,$heure_comment,$minute_comment,$date_comment)
					{
						$this->id_vid= $id_vid;
						$this->comment_vid=$comment_vid;
						$this->id_videos=$id_videos;
						$this->id_user=$id_user;
						$this->annee_comment=$annee_comment;
						$this->heure_comment=$heure_comment;
						$this->minute_comment=$minute_comment;
						$this->date_comment=$date_comment;
						
					} 

		/*LISTE DES GETTERS*/
		
		public function getId_vid()
		{
			return $this->id_vid;
		}
		
		public function getComment_vid()
		{
			return $this->comment_vid;
		}	

			public function getId_videos()
		{
			return $this->id_videos;
		}
		
			public function getId_user()
		{
			return $this->id_user;
		}
		
			public function getAnnee_comment()
		{
			return $this->annee_comment;
		}
			public function getHeure_comment()
		{
			return $this->heure_comment;
		}
		
		
		
			public function getMinute_comment()
		{
			return $this->minute_comment;
		}
		
	public function getDate_comment()
		{
			return $this->date_comment;
		}
		
		/*LISTE DES SETTERS*/
		
		public function setId_vid($id_vid)
		{
			$this->id_vid = $id_vid;
		}
		
		public function setComment_vid($omment_vid)
		{
			$this->comment_vid = $comment_vid;
		}

		
		public function setId_videos($id_videos)
		{
			$this->id_videos = $id_videos;
		}			
		
		public function setId_user($id_user)
		{
			$this->id_user = $id_user;
		}

		/*METHODE QUI PERMET D'AJOUTER UN comment_vids*/
		public function ajoutCommentV(){
			
			$bdd = connexionBdd();
			//requête pour éviter la redendance des message
			/* $request = $bdd->prepare("SELECT * FROM client WHERE message=:message");
			$result = $request->execute(array(
												':message'=>$this->message
											));
											
			$result=$request->fetchobject(); */
			
			

			//vérification pour s'avoir si l'objet existe
			//if(!is_object($result)){

				 $request = $bdd->prepare("INSERT INTO `commentaires_video` (id_vid,comment_vid,id_videos,id_user,annee_comment,heure_comment,minute_comment,date_comment) VALUES (:id_vid,:comment_vid,:id_videos,:id_user,:annee_comment,:heure_comment,:minute_comment,:date_comment)");

				$reponse = $request->execute(array(
													'id_vid'	 => NULL,			
													'comment_vid' => $this->comment_vid,
													
													'id_videos' => $this->id_videos,
													
													'id_user' => $this->id_user,
													'annee_comment' => $this->annee_comment,
													'heure_comment' => $this->heure_comment,
													'minute_comment' => $this->minute_comment,
													'date_comment' => $this->date_comment
												)); //var_dump($reponse); die();
			return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				 //}
		}

		
		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		//SELECT * FROM comment_vids INNER JOIN user ON comment_vids.id_comment_vid = user.id_user ORDER BY id_comment_vid DESC LIMIT 5
		
		public function affichageCommentaires(){
			$bdd = connexionBdd(); if(isset($_SESSION['id_videos'])){ $var=$_SESSION['id_videos'];} else{$var='';}
			$requete = $bdd->prepare("SELECT * FROM commentaires_video INNER JOIN user ON commentaires_video.`id_user`=user.`id_user` WHERE `id_videos`='$var' ORDER BY id_vid DESC LIMIT 20");
			$requete->execute();
			
			return $requete;
		} 
		
		
		
		
		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdCommentaires($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `commentaires_video` INNER JOIN user ON commentaires_video.`id_user`=user.`id_user` WHERE id_vid=?");
			$params=array($code);
			$request->execute($params);
			$comment_vid=$request->fetch();

			return $comment_vid; 
		}
		
		
		
		
		

		}


		
//======================================================================	
	
	
?>