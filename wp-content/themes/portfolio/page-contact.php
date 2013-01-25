<?php
	get_header();
?>
<div id="profo">
   	<h2 id="tSlide">Contactez-moi !</h2>
   	<div id="gmap"></div>
</div>
<div id="content">
	<?php
					if(isset($_POST["Valider"]))
					{
						$lechamp1 = stripslashes($_POST["email"]);
						$lechamp2 = stripslashes($_POST["message"]);
						$lechamp3 = stripslashes($_POST["nom"]);
						$mon_email = "etienne.denoel@gmail.com";
						$mon_pseudo = "Mail visiteur Blog Wordpress Portfolio";
						$mon_url = "http://www.etiennedenoel.be/contact";
						$son_email = ''.$lechamp1.'';

						if(empty($lechamp1)){
							echo "<div id='overlay'><p class='envoyer'>Champ email vide.<br><a href=\"" . $mon_url . "\">Retour</a></p></div>";
						}
						else if(empty($lechamp2)){
							echo "<div id='overlay'><p class='envoyer'>Champ message vide.<br><a href=\"" . $mon_url . "\">Retour</a></p></div>";
						}

						else{
							if (filter_var($lechamp1, FILTER_VALIDATE_EMAIL)){


								// Envoie du mail
								$entete = "From: " . $lechamp3 . " <" . $son_email . ">\n";
								$entete .= "MIME-Version: 1.0";
								if (@mail($mon_email,$lechamp1,$lechamp2,$entete))
								{
									echo "<div id='overlay'><p class='envoyer'>Votre message a été envoyé.<br><a href=\"" . $mon_url . "\">Retour</a></p></div>\n";

								}
								else
								{
									echo "<div id='overlay'><p class='envoyer'>Un problème s'est produit lors de l'envoi du message.<br><a href=\"" . $mon_url . "\">Retour</a></p></div>\n";
								}
							}
							else{
								echo "<div id='overlay'><p class='envoyer'>Adresse email invalide !.<br><a href=\"" . $mon_url . "\">Réessayer</a></p></div>\n";
							}

						//on ferme le else
						}
					//on ferme if(isset($_POST["Valider"]))
					}
				?>
		<div id="contact">

					<?php
						$args = array( 'post_type' => 'check', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :

							while($loop->have_posts()):
								$loop->the_post();

					?>
					<div class="infos" <?php post_class(); ?>>
						<h3 class="titre"><?php the_title(); ?></h3>
						<?php the_content(); ?>

					</div>
					<?php
						endwhile;
						endif;
					?>
		</div>
	</div>

<?php
	get_footer();

?>
