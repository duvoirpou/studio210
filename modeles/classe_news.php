<?php
	class videos
	{
		private $id_videos;
		private $theme;
		private $msg_news;
		private $rubrique;
		private $date_video;
		private $videos;

		public function __construct($id_videos,$theme,$msg_videos,$rubrique,$date_video,$videos)
					{
						$this->id_videos 	= $id_videos;
						$this->theme 	= $theme;
						$this->msg_videos 	= $msg_videos ;
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
			$this->id_news = $id_videos;
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


		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES eleves*/
        public function afficheNews(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos ORDER BY id_videos DESC LIMIT 2,3");
            $requete->execute();

            return $requete;
        }



		public function afficheVideos(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos ORDER BY id_videos");
            $requete->execute();

            return $requete;
				}

		public function affiche2News(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos ORDER BY id_videos DESC LIMIT 2");
            $requete->execute();

            return $requete;
        }


		public function affiche12News(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Face-à-face' ORDER BY id_videos DESC LIMIT 12");
            $requete->execute();

            return $requete;
		}

		public function afficheFaf(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Face-à-face' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
		}

		public function afficheEa(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Entretien avec' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
		}

		public function afficheTr(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Temps du reveil' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheQa(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Questions d\'actualité' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheAa(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Arts et âme' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheQr(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Questions Réponses' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheJtr(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Jt religions' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheIg(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Instant gospel' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheId(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Interview à domicile' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheOracle(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Oracle' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function affichePf(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Parole aux femmes' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheGr(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Grand reportage' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheZapping(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='210 zapping' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function afficheDecouverte(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Découverte' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }

		public function affichePq(){
            $bdd = connexionBdd();
            //$eleve = $_SESSION['news'];
            $requete = $bdd->prepare("SELECT * FROM videos WHERE rubrique='Piqure d\'histoire' ORDER BY id_videos DESC LIMIT 1");
            $requete->execute();

            return $requete;
        }


		//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierNews(){
			if($this->photo==""){
					$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `videos` SET `msg_videos`=?,`videos`=? WHERE id_videos =?");

							$msg_videos		= $this->msg_videos;
							$videos		= $this->videos;


							$id_videos		= $this->id_videos;

					$params=array($msg_videos,$videos,$id_videos);
					$request->execute($params);
			}else{
				$bdd = connexionBdd();
				//tmp_name est un dossier temporaire
				$videos=$_FILES['photo']['tmp_name'];

				//chemin pour recevoir les photos du site
				//images nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($videos, 'images/'.$videos);

				$request=$bdd->prepare("UPDATE `videos` SET `msg_videos`=?,`videos`=? WHERE id_videos =?");
							$msg_videos		= $this->msg_videos;
							$videos		= $this->videos;

							$id_videos		= $this->id_videos;

				$params=array($msg_videos,$videos,$id_videos);
				$request->execute($params);

			}
			return $request;
		}



		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdNews($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `videos` WHERE id_videos=?");
			$params=array($code);
			$request->execute($params);
			$news=$request->fetch();

			return $news;
		}


//======================================================================
	}

?>