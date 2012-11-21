<?php
	get_header();
?>
<div id="content">
	<?php
					if(isset($_POST["Valider"]))
					{
					$lechamp1 = stripslashes($_POST["email"]);
					$lechamp2 = stripslashes($_POST["message"]);
		
					 
					if(empty($lechamp1)){
					echo 'Le champ email est vide. <br/>';
					}
					else if(empty($lechamp2)){
					echo 'Le champ message est vide.<br/>';
					}
					else
					{
					$mon_email = "etienne.denoel@gmail.com";
					$mon_pseudo = "Mail visiteur Blog Wordpress Portfolio";
					$mon_url = "http://www.etiennedenoel.be/contact";
					$son_email = ''.$lechamp1.'';
					 
					// Envoie du mail
					$entete = "From: " . $mon_pseudo . " <" . $son_email . ">\n";
					$entete .= "MIME-Version: 1.0";
					if (@mail($mon_email,$lechamp1,$lechamp2,$entete))
					{ 
					echo "<p class='envoyer'>Votre message a été envoyé.</p>\n"; 
					echo "<a class='envoyer' href=\"" . $mon_url . "\">Retour</a>\n"; 
					}
					else 
					{ 
					echo "Un problème s'est produit lors de l'envoi du message.\n";
					echo "<a href=\"".$_SERVER["PHP_SELF"]."\">Réessayez</a>\n";
					}
					//on ferme le else
					}
					//on ferme if(isset($_POST["Valider"]))
					}
				?>
		<div id="contact" class="dbf">
				
					<?php
						$args = array( 'post_type' => 'check', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							
							while($loop->have_posts()):
								$loop->the_post();
						
					?>
					<div class="infos <?php post_class(); ?>">
						<h3 class="titre"><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
						
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