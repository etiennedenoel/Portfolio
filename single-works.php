<?php
	get_header();
?>

	<section id="content">
		
		<?php
					if(have_posts()):
					while(have_posts()):
					the_post();
				?>
				<section class="dbf a840">
					<article>
					
                                            <h2 class="titre"><?php the_title(); ?></h2>
                                            <p class="dateP"><?php _e('Publié le') ?> <?php echo get_the_date(); ?> par <?php echo get_the_author(); ?></p>
						
                                            <div class="<?php post_class(); ?>">
                                                    <?php the_post_thumbnail('medium'); ?>
                                                    <?php the_content(); ?>
                                            </div>
						
					</article>
				
				</section>
				<?php
					endwhile;
					endif;
				?>
		
	</section>
<?php
	get_footer();

?>