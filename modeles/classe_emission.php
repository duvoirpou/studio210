<?php 
	class emission
	{
		private $id_emission;
		private $msg_emission;
		private $photo_emission;
 	 	 
		public function __construct($id_emission,$msg_emission,$photo_emission)
					{
						$this->id_emission 	= $id_emission;
						$this->msg_emission 	= $msg_emission ;
						$this->photo_emission 	= $photo_emission;
					}

		/*LISTE DES GETTERS*/
		
		public function getid_emission()
		{
			return $this->id_emission;
		}
		
		public function getmsg_emission()
		{
			return $this->msg_emission;
		}	

		public function getphoto_emission()
		{
			return $this->photo_emission;
		}			

		/*LISTE DES SETTERS*/
		
		public function setid_emission($id_emission)
		{
			$this->id_emission = $id_emission;
		}
		
		public function setmsg_emission($msg_emission)
		{
			$this->msg_emission = $msg_emission;
		}

		public function setphoto_emission($photo_emission)
		{
			$this->photo_emission = $photo_emission;
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
            //$eleve = $_SESSION['emission'];
            $requete = $bdd->prepare("SELECT * FROM emission ORDER BY id_emission DESC LIMIT 3");
            $requete->execute();

            return $requete;
        }
		
		
		
		//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierNews(){
			if($this->photo==""){
					$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `emission` SET `msg_emission`=?,`photo_emission`=? WHERE id_emission =?");
					
							$msg_emission		= $this->msg_emission;
							$photo_emission		= $this->photo_emission;
							
							
							$id_emission		= $this->id_emission;
					
					$params=array($msg_emission,$photo_emission,$id_emission);
					$request->execute($params);
			}else{
				$bdd = connexionBdd();
				//tmp_name est un dossier temporaire
				$photo_emission=$_FILES['photo']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//images nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($photo_emission, 'images/'.$photo_emission);
				
				$request=$bdd->prepare("UPDATE `emission` SET `msg_emission`=?,`photo_emission`=? WHERE id_emission =?");
							$msg_emission		= $this->msg_emission;
							$photo_emission		= $this->photo_emission;
							
							$id_emission		= $this->id_emission;
				
				$params=array($msg_emission,$photo_emission,$id_emission);
				$request->execute($params);
				
			}
			return $request;
		}
		
		
		
		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdNews($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `emission` WHERE id_emission=?");
			$params=array($code);
			$request->execute($params);
			$emission=$request->fetch();

			return $emission; 
		}
		
		
//======================================================================	
	}
	
?>