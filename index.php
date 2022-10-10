<?php

// Start the session
session_start();

if(isset($_GET['c'])){
	$ctrl = $_GET['c'];

}

else {
	$ctrl = NULL;
}


include('connexionBdd/connexionBdd.php');
//Chargement des pages
switch($ctrl){
	case 'forma':
		include('controleurs/client/controleurFormation.php');
	break;

	case 'gal':
		include('controleurs/client/controleurGallery.php');
	break;

	case 'R_f_a_f':
		include('controleurs/client/controleurR_f_a_f.php');
	break;

	case 'forum':
		include('controleurs/client/controleurForum.php');
	break;

	case 'forum2':
		include('controleurs/client/controleurForum2.php');
	break;

	case 'forum3':
		include('controleurs/client/controleurForum3.php');
	break;

	case 'gal2':
		include('controleurs/client/controleurGallery2.php');
	break;

	case 'gal3':
		include('controleurs/client/controleurGallery3.php');
	break;

	case 'apro'://controleur
		include('controleurs/client/controleurA_propos.php');
	break;

	case 'adm'://
		include('controleurs/client/controleurAdministration.php');
	break;

	case 'compte':
		include('controleurs/client/controleurCompte.php');
	break;

	case 'connect':
		include('controleurs/client/controleurConnectForm.php');
	break;

	case 'connects':
		include('controleurs/client/controleurConnectClasse.php');
	break;


	case 'ctrl':
		include('controleurs/client/controleurControle.php');
	break;



	case 'commentaire':
		include('controleurs/client/controleur_commentaire.php');
	break;



	case 'affNews'://
		include('controleurs/controleur_modif.php');
	break;

	case 'rech_forum'://
		include('controleurs/client/controleur_rech_forum.php');
	break;

	case 'affSuj'://
		include('controleurs/controleur_suj.php');
	break;

	case 'affSuj2'://
		include('controleurs/controleur_suj2.php');
	break;

	case 'affSuj3'://
		include('controleurs/controleur_suj3.php');
	break;

	case 'affNewsComm'://
		include('controleurs/controleur_repoN.php');
	break;

	case 'affComm'://
		include('controleurs/controleur_modifComm.php');
	break;

	case 'affComm1'://
		include('controleurs/controleur_modifComm1.php');
	break;

	case 'dcx_client':
		include('controleurs/client/controleur_dcxClient.php');
	break;



	case 'insc':
		include('controleurs/client/controleurInscription.php');
	break;


	case 'modifProfil':
		include('controleurs/client/controleur_modifPro.php');
	break;









	//Gestion de l'administrateur
	case 'admin'://connexion de l'administrateur
		include('controleurs/admin/controleur_cnxAdmin.php');
	break;

	case 'ajSuj':
		include('controleurs/admin/controleur_sujet.php');
	break;

	case 'insV'://inscription
		include('controleurs/admin/controleur_inscriptionVid.php');
	break;

	case 'espadmin'://Espace de travail administrateur
		include('controleurs/admin/controleur_espAdmin.php');
	break;

	case 'affMbre'://Afficher les membres du site
		include('controleurs/admin/controleur_listeMembres.php');
	break;

	case 'msg'://Afficher les membres du site
		include('controleurs/admin/controleur_listeMessages.php');
	break;

	case 'videos'://Afficher les membres du site
		include('controleurs/admin/controleur_listeVideos.php');
	break;

	case 'modif'://Afficher les membres du site
		include('controleurs/admin/controleur_modif.php');
	break;

	case 'modifMsg'://Afficher les membres du site
		include('controleurs/admin/controleur_modifMsg.php');
	break;

	case 'supprClient'://Afficher les membres du site
		include('controleurs/admin/controleur_supprimerClient.php');
	break;

	case 'supprVid'://Afficher les membres du site
		include('controleurs/admin/controleur_supprimerVideos.php');
	break;

    case 'dcx_classes':
        include('controleurs/admin/controleur_dcxClasses.php');
    break;

	case 'dcnx_ad'://Espace membre administrateur
		include('controleurs/admin/controleur_dcxAdmin.php');
	break;

//=========================================================================




	default:
		include('controleurs/client/controleurAcceuil.php');
	break;
}

?>