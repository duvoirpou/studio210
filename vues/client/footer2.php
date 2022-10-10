<div id="footer" style="font-size: small">
        <div id="contactform">
          <h2>Laisser un message !</h2>

          <form action="" method="post">

            <fieldset>

              <label for="fullname">Nom :
                <input id="fullname" name="nom" type="text" value="" required/>
              </label>
              <label for="emailaddress" class="margin">Email :
                <input id="emailaddress" name="email" type="text" value="" required/>
              </label>
              <label for="phone">Téléphone :
                <input id="phone" name="telephone" type="text" value="" required/>
              </label>
              <label for="subject" class="margin">Objet :
                <input id="subject" name="objet" type="text" value="" />
              </label>
              <label for="message">Message :<br />
                <textarea id="message" name="message" cols="40" rows="4" required></textarea>
              </label>

              <?php
              $tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
              $date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
	                         $mois = $tab_mois[date("n")];
              $d = date('j').' '.$mois.' '.date('Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';

                  $annee = date('Y');

                  echo '<input type="text" name="date_message" value="'.$d.'" hidden/>';
                  echo '<input type="text" name="mois_message" value="'.$mois.'" hidden/>';
                  echo '<input type="text" name="annee_message" value="'.$annee.'" hidden/>';
              ?>

              <p>
                <input id="submitform" name="submitform" type="submit" value="Envoyer" />
                &nbsp;
                <input id="resetform" name="resetform" type="reset" value="Annuler" />
              </p>
            </fieldset>
          </form>


        </div>
    <!-- End Contact Form -->
        <div id="compdetails">
          <div id="officialdetails">
            <h2>Informations !</h2>
            <ul style="width: 300px">

              <li style="line-height:1.8em;">
                  <b>STUDIO 2010</b> EST LE PROGRAMME SOCIOCULTUREL SOUTENU PAR LA TELEVISION
                  NATIONALE CONGOLAISE ET INITI&Eacute; PAR <span style="color: #DAA520;">ED CHEVRY DIAZZ KOUAMALA</span>. DIFFUS&Eacute;E
                  EN DIRECT TOUS LES <span style="color: #DAA520;">DIMANCHES DE 7H30 &Agrave; 11H00</span> ET REDIFFUS&Eacute;E TOUS LES
                  <span style="color: #DAA520;">MARDIS DE 00H30 &Agrave; 4H30</span> SUR TELE-CONGO.
              </li>
              <!--<li style="line-height:1.5em;">
                  Un projet que constituent plusieurs rubriques allant de deux à trente minutes
                  à l'instar de : <strong>Paroles aux femmes</strong>, le <trong>JT des religions</trong>
                  , <strong>Entretien avec&#133;</strong>, le <strong>Livre du dimanche</strong>,
                  <strong>Face à face</strong> et bien d'autres. On peut aussi citer la tribune
                  intelectuelle <strong>Art et âme</strong> qui désormais s'est spécialisée dans les
                  débats (confrontations).
              </li>
              <li style="line-height:1.5em;">
                  Studio 210 est ainsi le programme officiel de Télé-Congo dans lequel sont traités tous
                  les sujets liés à la spiritualité, la culture, la société et aux réligions
                  avec un style simple, direct et souvent tenté d'humour. L'objectif ici est de se
                  rapprocher de la vérité tout en se basant sur le principe &#171;du choc des idées jaillit
                   la lumière&#187;.
              </li>
              <li class="last" style="line-height:1.5em;">
                  L'initiateur et producteur exécutif de ce programme a donc sélectionné plus d'une dizaine
                  de professionnels  pour l'accompagner dans cette merveilleuse avanture. Des hommes et des femmes
                  passionnés par la spiritualité, la culture et la production TV.
              </li>
              <li style="color: #DAA520; text-align: center;"><strong>- L'émission du peuple -</strong></li>
            </ul>-->
            <h2 style="">Partenaire</h2>
            <!--<p><a href="#">Get Our E-Newsletter</a> | <a href="#">Grab The RSS Feed</a></p>-->
            <div><img src="images/KST3.png" style="width: 250px; height: 100px;" /></div>

          </div>
          <div id="contactdetails">
            <h2>Comment nous joindre !</h2>
            <ul >
              <li><strong>Studio 210</strong></li>


              <li><strong>+242 06 678 25 47</strong></li>
              <li><strong>+242 04 419 07 22</strong></li>

              <li>Email: <span style="color: #DAA520;">studio210tv@gmail.com</span></li>
              <li class="last"><a href="#" title="STUDIO 210"><i class="fab fa-facebook fa-2x"></i></a>&nbsp;&nbsp; <a href="#" title="STUDIO 210"><i class="fab fa-twitter fa-2x"></i></a>&nbsp;&nbsp; <a href="#" title="+242 06 678 25 47"><i class="fab fa-whatsapp fa-2x"></i></a>&nbsp;&nbsp; <a href="#" title="STUDIO 210"><i class="fab fa-youtube fa-2x"></i></a></li>
            </ul>
          </div>
          <div class="clear"></div>
        </div>
    <!-- End Company Details -->
      <div id="copyright">
        <p class="fl_left">Copyright &copy; 2019 - Tous droits reservés - <a href="#">Domain Name</a></p>
        <p class="fl_right">Développé par <a target="_blank" href="?c" title="KONGOSOFT SERVICES">KST</a></p>
        <br class="clear" />
      </div>
      <div class="clear"></div>
</div>