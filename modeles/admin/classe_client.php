<?php 
	class client
	{
		private $id_user;
		private $nom_user;
		private $prenom_user;
		private $tel;
		private $pseudo;
		private $mpass;
		

		public function __construct($id_user,$nom_user,$prenom_user,$tel,$pseudo,$mpass)
					{
						$this->id_user 		= $id_user;
						$this->nom_user 		= $nom_user;
						$this->prenom_user 		= $prenom_user;
						$this->tel 		= $tel;
						$this->pseudo 		= $pseudo;
						$this->mpass		= $mpass;
						
						
						
					}

		/*LISTE DES GETTERS*/
		
		public function getId_user()
		{
			return $this->id_user;
		}
		
		public function getNom_user()
		{
			return $this->nom_user;
		}
		
		
		public function getPrenom_user()
		{
			return $this->prenom_user;
		}

		
		public function getTel()
		{
			return $this->tel;
		}
		

		public function getMpass()
		{
			return $this->mpass;
		}		
		
		

		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		public function affichageMembres(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM user ORDER BY id_user DESC");
			$requete->execute();
			
			return $requete;
		}

		public function getIdUser($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `user` WHERE id_user=?");
			$params=array($code);
			$request->execute($params);
			$user=$request->fetch();

			return $user; 
		}
		
//======================================================================	
	}
	
?>