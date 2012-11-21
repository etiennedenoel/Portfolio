<?php
	get_header();
?>
	<section id="content">
		<div id="gallery">
			<ul>
				
					<?php
						$args = array( 'post_type' => 'works', 'posts_per_page' => 12 );
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) : 
							while($loop->have_posts()):
								$loop->the_post();
						
					?>
					<li>
						
					<div class="<?php post_class(); ?>">

						<a href="<?php the_permalink(); ?>" title="Vers <?php the_title(); ?>"><?php the_post_thumbnail('folio-work'); ?></a> 
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
						<h4 class="tech"><?php echo(get_the_term_list($post->ID, "techniques")); ?></h4>
						<p><?php the_excerpt(); ?></p>
						<a class='plusInf' href="<?php the_permalink(); ?>" title="Plus d'informations sur le travail">Plus d'infos</a>
						
					</div>
					</li>
					<?php
						endwhile;
						endif;
					?>
				
			</ul>
		</div>
	</section>
<?php
	get_footer();
?>