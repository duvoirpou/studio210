<?php
				if(isset($_SESSION['nom_user'])){
				echo '
        <li><a href="#" style="text-decoration: none"><img class="imgl" src="images/'.$_SESSION['photo'].'" style="margin-top: -25px; border-radius: 100%; " alt="" width="50" height="50" /></a>
            <ul style="width: 106px; margin-top: 17px" id="">
              <li style=""><a  href="index.php?c=modifProfil&code='.$_SESSION['id_user'].'" style="width: 106px; text-decoration: none" class="sousMenu"><b>Mon profil</b></a></li>
              <li style=""><a  href="index.php?c=dcx_client" style="width: 106px;text-decoration: none" class="sousMenu"><b>D&eacute;connexion</b></a></li>
            </ul>
        </li>
        
        
        '
        ;}
			?>
                  
                  
                  
                  
                  <!-- <li><a href="#" style="text-decoration: none"><img class="imgl" src="images/'.$_SESSION['photo'].'" style="margin-top: -25px; border-radius: 100%; " alt="" width="50" height="50" /></a>
            <ul style="width: 106px; margin-top: 17px" id="">
              <li style=""><a  href="?c=modifProfil&code='.$_SESSION['id_user'].'" style="width: 110px; text-decoration: none" class="sousMenu"><b>Mon profil</b></a></li>
              <li style=""><a  href="?c=dcx_client" style="width: 110px;text-decoration: none" class="sousMenu"><b>D&eacute;connexion</b></a></li>
            </ul>
        </li>
        
        
        
        
        
         <li><a href="#" style="text-decoration: none"><b>'.$_SESSION['pseudo'].'</b></a>
            <ul style="width: 110px; " id="">
              <li style=""><a  href="?c=modifProfil&code='.$_SESSION['id_user'].'" style="width: 110px; text-decoration: none" class="sousMenu"><b>Mon profil</b></a></li>
              <li style=""><a  href="?c=dcx_client" style="width: 110px;text-decoration: none" class="sousMenu"><b>D&eacute;connexion</b></a></li>
            </ul>
        </li>
        
        -->