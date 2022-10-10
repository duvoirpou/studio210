<?php 
	class video
	{
		private $id_video;
		private $nom_video;
		private $chemin;
		

		public function __construct($id_video,$nom_video,$chemin)
					{
						$this->id_video 		= $id_video;
						$this->nom_video 		= $nom_video ;
						$this->chemin 	= $chemin;
						
					}

		/*LISTE DES GETTERS*/
		
		public function getId_video()
		{
			return $this->id_video;
		}
		
		public function getNom_video()
		{
			return $this->nom_video;
		}	

		public function getChemin()
		{
			return $this->chemin;
		}	
		
		
		
		/*Connexion à la base de Données
		public function connexionBdd()
		{			
			try{
				$bdd = new PDO('mysql:host=localhost;dbname=test_mvc;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		}*/

		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		public function affichageMembres(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM video");
			$requete->execute();
			
			return $requete;
		}

		
		
//======================================================================	
	}
	
?>