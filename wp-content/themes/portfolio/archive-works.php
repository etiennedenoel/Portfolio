<?php
remove_filter('the_content','wpautop');
 remove_filter('the_excerpt','wpautop');
get_header();
	get_header();
?>
	<div id="content" role="main">
		<div id="gallery">
			<ul>

					<?php
						$args = array( 'post_type' => 'works', 'posts_per_page' => 12 );
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while($loop->have_posts()):
								$loop->the_post();

					?>
					<li itemscope="" itemtype="http://schema.org/CreativeWork">

					<div <?php post_class(); ?>>

						<a href="<?php the_permalink(); ?>" title="Vers <?php the_title(); ?>" itemprop="image"><?php the_post_thumbnail('folio-work'); ?></a>
						<h3 itemprop="name"><a href="<?php the_permalink(); ?>" title="Vers <?php the_title(); ?>"><?php the_title(); ?></a> </h3>
						<h4 class="tech" itemprop="genre"><?php echo(get_the_term_list($post->ID, "techniques")); ?></h4>
						<?php the_excerpt(); ?>
						<a class='plusInf' href="<?php the_permalink(); ?>" title="Plus d'informations sur le travail">Plus d'infos</a>

					</div>
					</li>
					<?php
						endwhile;
						endif;
					?>

			</ul>
		</div>
	</div>
<?php
	get_footer();
?>
