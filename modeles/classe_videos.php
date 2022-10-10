<?php 
	class video
	{
		private $id_video;
		private $theme_video;
		private $commentaire_video;
		private $chemin;
		private $rubrique;
 	 	 
		public function __construct($id_video,$theme_video,$commentaire_video,$chemin,$rubrique)
					{
						$this->id_video 	= $id_video;
						$this->theme_video 	= $theme_video;
						$this->commentaire_video 	= $commentaire_video;
						$this->chemin 	= $chemin;
						$this->rubrique 	= $rubrique;
					}

		/*LISTE DES GETTERS*/
		
		public function getid_video()
		{
			return $this->id_video;
		}
		
		public function getTheme_video()
		{
			return $this->theme_video;
		}	

		
		public function getCommentaire_video()
		{
			return $this->commentaire_video;
		}
		
		public function getRubrique()
		{
			return $this->rubrique;
		}
		
		
		public function getChemin()
		{
			return $this->chemin;
		}	

		/*LISTE DES SETTERS*/
		
		public function setId_video($id_video)
		{
			$this->id_video = $id_video;
		}
		
		public function setTheme_video($theme_video)
		{
			$this->theme_video = $theme_video;
		}

		public function setChemin($chemin)
		{
			$this->chemin = $chemin;
		}
		
		
		
		public function setCommentaire($commentaire)
		{
			$this->commentaire = $commentaire;
		}
		
		
		public function setRubrique($rubrique)
		{
			$this->rubrique = $rubrique;
		}
		
		
		
		/*Connexion à la base de Données*/
		/* public function connexionBdd()
		{			
			try{
				$bdd = new PDO('mysql:host=localhost;dbname=test_mvc;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		} */

		
		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES */
        public function afficheNews(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['video'];
            $requete = $bdd->prepare("SELECT * FROM video ORDER BY id_video DESC LIMIT 3");
            $requete->execute();

            return $requete;
        }
		
		
		
		//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierNews(){
			if($this->photo==""){
					$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `video` SET `theme_video`=?, commentaire_video=?, `chemin`=?, rubrique=? WHERE id_video =?");
					
							$theme_video		= $this->theme_video;
							$commentaire_video		= $this->commentaire_video;
							$chemin		= $this->chemin;
							$rubrique		= $this->rubrique;
							
							
							$id_video		= $this->id_video;
					
					$params=array($id_video,$theme_video,$commentaire_video,$chemin,$rubrique);
					$request->execute($params);
			}else{
				$bdd = connexionBdd();
				//tmp_name est un dossier temporaire
				$chemin=$_FILES['photo']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//images nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($chemin, 'images/'.$chemin);
				
				$request=$bdd->prepare("UPDATE `video` SET `theme_video`=?, commentaire_video=?, `chemin`=?, rubrique=? WHERE id_video =?");
							$theme_video		= $this->theme_video;
							$commentaire_video		= $this->commentaire_video;
							$chemin		= $this->chemin;
							$rubrique		= $this->rubrique;
							
							$id_video		= $this->id_video;
				
				$params=array($id_video,$theme_video,$commentaire_video,$chemin,$rubrique);
				$request->execute($params);
				
			}
			return $request;
		}
		
		
		
		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdNews($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `video` WHERE id_video=?");
			$params=array($code);
			$request->execute($params);
			$News=$request->fetch();

			return $News; 
		}
		
		
//======================================================================	
	}
	
?>