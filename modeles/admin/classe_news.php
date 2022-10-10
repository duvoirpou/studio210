<?php 
	class news
	{
		private $id_videos;
		private $theme;
		private $msg_videos;
		private $rubrique;
		private $date_video;
		private $videos;
 	 	 
		public function __construct($id_videos,$theme,$msg_videos,$rubrique,$date_video,$videos)
					{
						$this->id_videos 	= $id_videos;
						$this->theme 	= $theme;
						$this->msg_videos 	= $msg_videos;
						$this->rubrique 	= $rubrique;
						$this->date_video 	= $date_video;
						$this->videos 	= $videos;
					}

		/*LISTE DES GETTERS*/
		
		public function getId_videos()
		{
			return $this->id_videos;
		}
		
		public function getTheme()
		{
			return $this->theme;
		}
		
		public function getMsg_videos()
		{
			return $this->msg_videos;
		}
		
		public function getRubrique()
		{
			return $this->rubrique;
		}
		
		public function getDate_video()
		{
			return $this->date_video;
		}

		public function getVideos()
		{
			return $this->videos;
		}			

		/*LISTE DES SETTERS*/
		
		public function setId_videos($id_videos)
		{
			$this->id_videos = $id_videos;
		}
		
		public function setMsg_videos($msg_videos)
		{
			$this->msg_videos = $msg_videos;
		}
		
		public function setDate_video($date_video)
		{
			$this->date_video = $date_video;
		}

		public function setVideos($videos)
		{
			$this->videos = $videos;
		}






		
		/*METHODE QUI PERMET D'AJOUTER UN user*/
		public function ajoutClient(){
            $bdd = connexionBdd();
			//$bdd = connexionBdd();
			//requête pour éviter la redendance des date_video
			//$request = $bdd->prepare("SELECT * FROM `user` WHERE date_video=:date_video");
			//$result = $request->execute(array(
			//									':date_video'=>$this->date_video
			//								));
											
			//$result=$request->fetchobject();
			
			

			//vérification pour s'avoir si l'objet existe
			//if(!is_object($result)){

				 $request = $bdd->prepare("INSERT INTO `videos`(`id_videos`, `theme`, `msg_videos`, `rubrique`, `date_video`, `videos`) VALUES (:id_videos,:theme,:msg_videos,:rubrique,:date_video,:videos)");

				$reponse = $request->execute(array(
													'id_videos'	 => NULL,			
													'theme' => $this->theme,
													'msg_videos' => $this->msg_videos,
													'rubrique' => $this->rubrique,
													'date_video' => $this->date_video,
													'videos' => $this->videos
													
													
												)); //var_dump($reponse); die();
			return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				 //}
		}




		
//======================================================================	
	}
	
?>