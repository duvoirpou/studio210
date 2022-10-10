<?php
include('modeles/admin/classe_news.php');
include('upload_video.php');


if(isset($_POST['enregistrer']))

		{

			$videos='';


				if ($_FILES["videos"]["name"] != '') {

					$videos = upload_video();



				}

			$theme	 = htmlentities(trim($_POST['theme']));
			$msg_videos	 = htmlentities(trim($_POST['msg_videos']));
			$rubrique	 = strip_tags(trim($_POST['rubrique']));
			$date_video	 = htmlentities(trim($_POST['date_video']));




			$Ins_news = new News(NULL,$theme,$msg_videos,$rubrique,$date_video,$videos);

			$reponse = $Ins_news->ajoutClient();
			//$_SESSION['id_user'] = $reponse;




			}



	include ('vues/admin/ajoutVideo.php');
?>