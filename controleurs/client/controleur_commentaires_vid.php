<?php
include('modeles/classe_commentaires_vid.php');

	if(isset($_POST['envoyer'])){
		//var_dump($_POST);exit;
		
		if(!empty($_POST['comment_vid']) AND !empty($_POST['id_videos']) AND !empty($_POST['id_user'])){//si ces champs sont remplis -> ligne 33

		$comment_vid		= htmlentities(trim($_POST['comment_vid']));
		
		$id_videos		= htmlentities(trim($_POST['id_videos']));
		$id_user		= htmlentities(trim($_POST['id_user']));
		
		
		

		
		$AjouterCommentaire = new Commentaires_video (NULL,$comment_vid,$id_videos,$id_user);
	
		$reponse = $AjouterCommentaire->ajoutCommentV();

			
			
			
			
		if($reponse){//si le message est envoyé
			
			//header('location:?c=affNews');
			echo "
                          <script language='JavaScript'>

                          document.location.replace('?c=affNews');
                          </script>
		                  ";
			//on revient sur la page "commentaire"
			
		}else{//sinon on revient sur la page "commentaire"
			//header('location:?c=affNews');
			echo "
                          <script language='JavaScript'>
						alert('Saisissez un message');
                          document.location.replace('?c=affNews');
                          </script>
		                  ";
		}
		}//le msg est envoyé
		
		
		
		
		
		}
	include('vues/client/affNews.php');

?>






