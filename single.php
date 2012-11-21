<?php
	get_header();
?>

	<div id="content">
		
		<?php
					if(have_posts()):
					while(have_posts()):
					the_post();
				?>
				<section class="dbf">
					<article class="single">

						<h2 class="titre"><?php the_title(); ?></h2>
						<p class="dateP"><?php _e('Publié le') ?> <?php echo get_the_date(); ?> par <?php echo get_the_author(); ?></p>

						<?php the_post_thumbnail('posta'); ?>
						<div class="<?php post_class(); ?>">
							
							<?php the_content(); ?>
						</div>
						<?php comments_template(); ?>
					</article>
					
				

				</section>
				<?php
					endwhile;
					endif;
				?>

			
		
	</div>
	
<?php
	get_footer();

?>