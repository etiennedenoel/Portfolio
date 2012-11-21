<?php
	get_header();
?>
	<div id="content">
		<div id="formation" class="dbf">
				
					<?php
						$args = array( 'post_type' => 'about', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) : 
							while($loop->have_posts()):
								$loop->the_post();
						
					?>
					<div class="<?php post_class(); ?>">
						<a href="<?php the_permalink(); ?>" title="Vers <?php the_title(); ?>"><?php the_post_thumbnail('folio-work'); ?></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_content(); ?></p>
						<a class='plusInf' href="<?php the_permalink(); ?>" title="Plus d'informations sur le travail">Plus d'infos</a>
						
					</div>
					<?php
						endwhile;
						endif;
					?>
		</div>
	</div>

<?php

	get_sidebar('primary');
?>
	<hr />
<?php
	get_sidebar('secondary');
	get_footer();

?>
