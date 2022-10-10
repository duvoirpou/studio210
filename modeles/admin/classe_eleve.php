<?php 
	class eleve
	{
		private $code_eleve;
		private $matricule;
		private $noms_eleve;
		private $prenoms_eleve;
		private $naissance;
		private $age;
		private $sexe;
		private $adresse;
		private $tel;
		private $ecole_origine;
		private $motif_depart;
		private $raison_choix;
		private $niveau;
		private $classe;
		private $cycle;
		private $frequentation;
		private $annee_scolaire;
		
		private $insc_reinsc;
		private $reduction_frscol;
		private $mois_juin;
		private $situation_parent;
		private $habite_parent;
		private $lien_tf;
		private $delai_paie;
		private $photo_eleve;
		private $date_insc;
		private $operateur;

		public function __construct($code_eleve,$matricule,$noms_eleve,$prenoms_eleve,$naissance,$age,$sexe,$adresse,$tel,$ecole_origine,
                                    $motif_depart,$raison_choix,$niveau,$classe,$cycle,$frequentation,$annee_scolaire,
                                    $insc_reinsc,$reduction_frscol,$mois_juin,$situation_parent,$habite_parent,$lien_tf,
                                    $delai_paie,$photo_eleve,$date_insc,$operateur)
					{
						$this->code_eleve 		= $code_eleve;
						$this->matricule 		= $matricule ;
						$this->noms_eleve 		= $noms_eleve ;
						$this->prenoms_eleve 	= $prenoms_eleve;
						$this->naissance		= $naissance;
						$this->age		= $age;
						$this->sexe		= $sexe;
						$this->adresse		= $adresse;
						$this->tel		= $tel;
						$this->ecole_origine		= $ecole_origine;
						$this->motif_depart		= $motif_depart;
						$this->raison_choix		= $raison_choix;
						$this->niveau		= $niveau;
						$this->classe		= $classe;
						$this->cycle		= $cycle;
						$this->frequentation		= $frequentation;
						$this->annee_scolaire		= $annee_scolaire;
						$this->insc_reinsc		= $insc_reinsc;
						$this->reduction_frscol		= $reduction_frscol;
						$this->mois_juin		= $mois_juin;
						$this->situation_parent		= $situation_parent;
						$this->habite_parent		= $habite_parent;
						$this->lien_tf		= $lien_tf;
						$this->delai_paie		= $delai_paie;
						$this->photo_eleve		= $photo_eleve;
						$this->date_insc		= $date_insc;
						$this->operateur		= $operateur;
						
					}

		/*LISTE DES GETTERS*/
		
		public function getCode_eleve()
		{
			return $this->code_eleve;
		}
		
		public function getMatricule()
		{
			return $this->matricule;
		}	

		public function getNoms_eleve()
		{
			return $this->noms_eleve;
		}	
		
		public function getPrenoms_eleve()
		{
			return $this->prenoms_eleve;
		}

		public function getNaissance()
		{
			return $this->naissance;
		}	
		
		public function getAge()
		{
			return $this->age;
		}	
		
		public function getSexe()
		{
			return $this->sexe;
		}	
		
		public function getAdresse()
		{
			return $this->adresse;
		}	
		
		public function getTel()
		{
			return $this->tel;
		}	
		
		public function getEcole_origine()
		{
			return $this->ecole_origine;
		}	
		
		public function getMotif_depart()
		{
			return $this->motif_depart;
		}	
		
		public function getRaison_choix()
		{
			return $this->raison_choix;
		}	
		
		public function getNiveau()
		{
			return $this->niveau;
		}	
		
		public function getClasse()
		{
			return $this->classe;
		}	
		
		public function getCycle()
		{
			return $this->cycle;
		}	
		
		public function getFrequentation()
		{
			return $this->frequentation;
		}	
		
		public function getAnnee_scolaire()
		{
			return $this->annee_scolaire;
		}	
		
		public function getInsc_reinsc()
		{
			return $this->insc_reinsc;
		}	
		
		public function getReduction_frscol()
		{
			return $this->reduction_frscol;
		}	
		
		public function getMois_juin()
		{
			return $this->mois_juin;
		}	
		
		public function getSituation_parent()
		{
			return $this->situation_parent;
		}	
		
		public function getHabite_parent()
		{
			return $this->habite_parent;
		}	
		
		public function getLien_tf()
		{
			return $this->lien_tf;
		}	
		
		public function getDelai_paie()
		{
			return $this->delai_paie;
		}	
		
		public function getPhoto_eleve()
		{
			return $this->photo_eleve;
		}	
		
		public function getDate_insc()
		{
			return $this->date_insc;
		}	
		
		public function getOperateur()
		{
			return $this->operateur;
		}		

		/*LISTE DES SETTERS*/
		
		public function setCode_eleve($codes)
		{
			$this->code_eleve = $code_eleve;
		}
		
		public function setMatricule($matricule)
		{
			$this->matricule = $matricule;
		}

		public function setNoms_eleve($noms_eleve)
		{
			$this->noms_eleve = $noms_eleve;
		}	
		
		public function setPrenoms_eleve($prenoms_eleve)
		{
			$this->prenoms_eleve = $prenoms_eleve;
		}			
		
		public function setNaissance($naissance)
		{
			$this->naissance = $naissance;
		}	
		
		public function setAge($age)
		{
			$this->age = $age;
		}	
		
		public function setSexe($sexe)
		{
			$this->sexe = $sexe;
		}	
		
		public function setAdresse($adresse)
		{
			$this->adresse = $adresse;
		}	
		
		public function setTel($tel)
		{
			$this->tel = $tel;
		}	
		
		public function setEcole_origine($ecole_origine)
		{
			$this->ecole_origine = $ecole_origine;
		}
		
		public function setMotif_depart($motif_depart)
		{
			$this->motif_depart = $motif_depart;
		}	
		
		public function setRaison_choix($raison_choix)
		{
			$this->raison_choix = $raison_choix;
		}	
		
		public function setNiveau($niveau)
		{
			$this->niveau = $niveau;
		}	
		
		public function setClasse($classe)
		{
			$this->classe = $classe;
		}	
		
		public function setCycle($cycle)
		{
			$this->cycle = $cycle;
		}	
		
		public function setFrequentation($frequentation)
		{
			$this->frequentation = $frequentation;
		}		
		
		public function setAnnee_scolaire($annee_scolaire)
		{
			$this->annee_scolaire = $annee_scolaire;
		}	
		
		public function setInsc_reinsc($insc_reinsc)
		{
			$this->insc_reinsc = $insc_reinsc;
		}	
		
		public function setReduction_frscol($reduction_frscol)
		{
			$this->reduction_frscol = $reduction_frscol;
		}	
		
		public function setMois_juin($mois_juin)
		{
			$this->mois_juin = $mois_juin;
		}	
		
		public function setSituation_parent($situation_parent)
		{
			$this->situation_parent = $situation_parent;
		}	
		
		public function setHabite_parent($habite_parent)
		{
			$this->habite_parent = $habite_parent;
		}	
		
		public function setLien_tf($lien_tf)
		{
			$this->lien_tf = $lien_tf;
		}	
		
		public function setDelai_paie($delai_paie)
		{
			$this->delai_paie = $delai_paie;
		}	
		
		public function setPhoto_eleve($photo_eleve)
		{
			$this->photo = $photo_eleve;
		}	
		
		public function setDate_insc($date_insc)
		{
			$this->date_insc = $date_insc;
		}	
		
		public function setOperateur($operateur)
		{
			$this->operateur = $operateur;
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

		/*METHODE QUI PERMET D'AJOUTER UN ELEVE*/
		public function ajouteleve(){
			
			$bdd = connexionBdd();
			
			//requête pour éviter la redendance des noms_eleve
			$request = $bdd->prepare("SELECT * FROM eleve WHERE matricule = :matricule");
			$result = $request->execute(array(
												':matricule'=>$this->matricule,
											));
			
			$result=$request->fetchobject();

			//vérification pour s'avoir si l'objet existe
			if(!is_object($result)){

				$request = $bdd->prepare("INSERT INTO eleve(code_eleve,matricule,noms_eleve,prenoms_eleve,naissance,age,sexe,adresse,tel,ecole_origine,motif_depart,raison_choix,niveau,classe,cycle,frequentation,annee_scolaire,insc_reinsc,reduction_frscol,mois_juin,situation_parent,habite_parent,lien_tf,:delai_paie,photo_eleve,date_insc,operateur) 
										  VALUES (:code_eleve,:matricule,:noms_eleve,:prenoms_eleve,:naissance,:age,:sexe,:adresse,:tel,:ecole_origine,:motif_depart,:raison_choix,:niveau,:classe,:cycle,:frequentation,:annee_scolaire,:insc_reinsc,:reduction_frscol,:mois_juin,:situation_parent,:habite_parent,:lien_tf,:delai_paie,:photo_eleve,:date_insc,:operateur)");

				$reponse = $request->execute(array(
													'code_eleve'		=> NULL,
													'matricule'	=> $this->matricule,
													'noms_eleve'	=> $this->noms_eleve,			
													'prenoms_eleve'	=> $this->prenoms_eleve,
													'naissance'		=> $this->naissance,
													'age'		=> $this->age,
													'sexe'		=> $this->sexe,
													'adresse'		=> $this->adresse,
													'tel'		=> $this->tel,
													'ecole_origine'		=> $this->ecole_origine,
													'motif_depart'		=> $this->motif_depart,
													'raison_choix'		=> $this->raison_choix,
													'niveau'		=> $this->niveau,
													'classe'		=> $this->classe,
													'cycle'		=> $this->cycle,
													'frequentation'		=> $this->frequentation,
													'annee_scolaire'		=> $this->annee_scolaire,
													'insc_reinsc'		=> $this->insc_reinsc,
													'reduction_frscol'		=> $this->reduction_frscol,
													'mois_juin'		=> $this->mois_juin,
													'situation_parent'		=> $this->situation_parent,
													'habite_parent'		=> $this->habite_parent,
													'lien_tf'		=> $this->lien_tf,
													'delai_paie'		=> $this->delai_paie,
													'photo_eleve'		=> $this->photo_eleve,
													'date_insc'		=> $this->date_insc,
													'operateur'		=> $this->operateur
												));	
					 
				return $reponse;
					
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				}
		}

		//METHODE QUI PERMET DE SUPPRIMER ELEVE
			public function supprimereleve(){
				//connexion à la bdd
				
				$bdd = connexionBdd();
				$code=$_GET['code'];
				$request=$bdd->prepare("DELETE FROM eleve WHERE code=? LIMIT 1");
				
				$params=array($code);
				
				$request->execute($params);
				
				return $request;
		}

		/*METHODE QUI PERMET DE SE CONNECTER AU SITE*/

			public function connexionSitEleve($noms_eleve,$matricule){

				$bdd = connexionBdd();

				$request = $bdd->prepare("SELECT * FROM eleve WHERE  noms_eleve=? AND matricule=?");

				$request->execute(array($_POST['noms_eleve'],$_POST['matricule']));

				$reponse = $request->fetchObject();

				return $reponse;

				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
				unset($bdd);
		}

		//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierMembre(){
			if($this->photo==""){
					$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `eleve` SET `matricule`=?,`noms_eleve`=?,`prenoms_eleve`=?,`naissance`=?,`age`=?,`sexe`=?,`adresse`=?,`tel`=?,`ecole_origine`=?,`motif_depart`=?,`raison_choix`=?,`niveau`=?,`classe`=?,`cycle`=?,`frequentation`=?,`annee_scolaire`=?,`insc_reinsc`=?,`reduction_frscol`=?,`mois_juin`=?,`situation_parent`=?,`habite_parent`=?,`lien_tf`=?,`delai_paie`=?,`photo`=?,`date_insc`=?,`operateur`=? WHERE code =?");
					
							$matricule		= $this->matricule;
							$noms_eleve	= $this->noms_eleve;
							$prenoms_eleve	= $this->prenoms_eleve;
							$naissance	= $this->naissance;
							$age		= $this->age;
							$sexe		= $this->sexe;
							$adresse		= $this->adresse;
							$tel		= $this->tel;
							$ecole_origine		= $this->ecole_origine;
							$motif_depart		= $this->motif_depart;
							$raison_choix		= $this->raison_choix;
							$niveau		= $this->niveau;
							$classe		= $this->classe;
							$cycle		= $this->cycle;
							$frequentation		= $this->frequentation;
							$annee_scolaire		= $this->annee_scolaire;
							$insc_reinsc		= $this->insc_reinsc;
							$reduction_frscol		= $this->reduction_frscol;
							$mois_juin		= $this->mois_juin;
							$situation_parent		= $this->situation_parent;
							$habite_parent		= $this->habite_parent;
							$lien_tf		= $this->lien_tf;
							$delai_paie		= $this->delai_paie;
							
							$photo		= $this->photo;
							$date_insc		= $this->date_insc;
							$operateur		= $this->operateur;
					
					$params=array($matricule,$noms_eleve,$prenoms_eleve,$naissance,$age,$sexe,$adresse,$tel,$ecole_origine,$motif_depart,$raison_choix,$niveau,$classe,$cycle,$frequentation,$annee_scolaire,$insc_reinsc,$reduction_frscol,$mois_juin,$situation_parent,$habite_parent,$lien_tf,$delai_paie,$photo,$date_insc,$operateur);
					
					$request->execute($params);
			}else{
				$bdd = connexionBdd();
				//tmp_name est un dossier temporaire
				$photo_eleve=$_FILES['photo']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//images nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($photo, 'images/'.$photo);
				
				$request=$bdd->prepare("UPDATE `eleve` SET `matricule`=?,`noms_eleve`=?,`prenoms_eleve`=?,`naissance`=?,`age`=?,`sexe`=?,`adresse`=?,`tel`=?,`ecole_origine`=?,`motif_depart`=?,`raison_choix`=?,`niveau`=?,`classe`=?,`cycle`=?,`frequentation`=?,`annee_scolaire`=?,`insc_reinsc`=?,`reduction_frscol`=?,`mois_juin`=?,`situation_parent`=?,`habite_parent`=?,`lien_tf`=?,`delai_paie`=?,`photo`=?,`date_insc`=?,`operateur`=? WHERE code =?");
					
							$matricule		= $this->matricule;
							$noms_eleve	= $this->noms_eleve;
							$prenoms_eleve	= $this->prenoms_eleve;
							$naissance	= $this->naissance;
							$age		= $this->age;
							$sexe		= $this->sexe;
							$adresse		= $this->adresse;
							$tel		= $this->tel;
							$ecole_origine		= $this->ecole_origine;
							$motif_depart		= $this->motif_depart;
							$raison_choix		= $this->raison_choix;
							$niveau		= $this->niveau;
							$classe		= $this->classe;
							$cycle		= $this->cycle;
							$frequentation		= $this->frequentation;
							$annee_scolaire		= $this->annee_scolaire;
							$insc_reinsc		= $this->insc_reinsc;
							$reduction_frscol		= $this->reduction_frscol;
							$mois_juin		= $this->mois_juin;
							$situation_parent		= $this->situation_parent;
							$habite_parent		= $this->habite_parent;
							$lien_tf		= $this->lien_tf;
							$delai_paie		= $this->delai_paie;
							
							$photo		= $this->photo;
							$date_insc		= $this->date_insc;
							$operateur		= $this->operateur;
					
					$params=array($matricule,$noms_eleve,$prenoms_eleve,$naissance,$age,$sexe,$adresse,$tel,$ecole_origine,$motif_depart,$raison_choix,$niveau,$classe,$cycle,$frequentation,$annee_scolaire,$insc_reinsc,$reduction_frscol,$mois_juin,$situation_parent,$habite_parent,$lien_tf,$delai_paie,$photo,$date_insc,$operateur);
					
					$request->execute($params);
				
				
			}
			return $request;
		}


/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		public function affichageMembres(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM eleve");
			$requete->execute();
			
			return $requete;
		}

		
		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdeleve($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `eleve` WHERE code=?");
			$params=array($code);
			$request->execute($params);
			$eleve=$request->fetch();

			return $eleve; 
		}
		
//======================================================================	
	}
	
?>