<?php
include('modeles/classe_user.php');

if(isset($_POST['enregistrer']))
		{
			
			if(!empty($_POST['nom_user']) AND !empty($_POST['prenom_user']) AND !empty($_POST['sexe']) AND !empty($_POST['pseudo']) AND !empty($_POST['mpass']) AND !empty($_POST['avatar']) ){
			
			$nom_user	 = htmlentities(trim($_POST['nom_user']));
			$prenom_user	 = htmlentities(trim($_POST['prenom_user']));
			$sexe	 = htmlentities(trim($_POST['sexe']));
			$tel	 = htmlentities(trim($_POST['tel']));
			$pseudo	 = htmlentities(trim($_POST['pseudo']));
			$mpass	 = htmlentities(trim($_POST['mpass']));
			$avatar	 = htmlentities(trim($_POST['avatar']));
			
			$Ins_users = new user(NULL,$nom_user,$prenom_user,$sexe,$tel,$pseudo,$mpass,$avatar);
		
			$reponse = $Ins_users->ajoutClient();
			//$_SESSION['id_user'] = $reponse;
			
			if(isset($_POST['enregistrer']))
		{if($reponse){
					header('location:?c=commande');
				}else
					{
					header('location:?c=insc');
					}
					}
					}
			}



	include ('vues/user/forum.php');
?>