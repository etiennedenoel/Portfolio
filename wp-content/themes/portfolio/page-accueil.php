<?php
	get_header();
?>
<style type="text/css">
	i, .social{display: none;}
	.city{margin-left: 0;}

</style>
<div id="profo">
            <h2 id="tSlide">Derniers Travaux</h2>
            <div id="larg" class="slider-wrapper">
                <div id="featured">
                    <?php
                        $loop = new WP_query(array('post_type'=>'slides'));
                        if($loop->have_posts()):
                        while($loop->have_posts()):
                        $loop->the_post();
                    ?>
                    <?php the_post_thumbnail('slide'); ?>
                    <?php
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
<div id="content">
	<div id="accuP">
      	<div id="imageFond">
      		<img width="880px" height="524px" alt="Etienne Denoel WebDesigner & WebDeveloper" src="<?php bloginfo('template_url') ?>/img/moi.png" />
      	</div>
	    <div id="pres" class="dbf">

			<?php rewind_posts(); ?>
			<?php
				if(have_posts()):
				while(have_posts()):

				the_post();
			?>
			<?php the_content(); ?>
			<?php
				endwhile;
				endif;
			?>
			<div class="sep">
				<hgroup>
					<h2 class="titre">Compétences</h3>
		        	<h4>Programmes & langages</h4>
				</hgroup>

		        	<ul>
		                <?php
		                    $args = array( 'post_type' => 'skills' );
		                    $loop = new WP_Query( $args );
		                    if ( $loop->have_posts() ) :

		                    while($loop->have_posts()):
		                        $loop->the_post();

		                ?>
		                    <li><p class="nom"><?php the_content(); ?></p><span class="rate"><span class="<?php echo get_post_meta($post->ID, 'classe', true); ?>">.</span></span></li>
		                <?php
		                    endwhile;
		                    endif;
		                ?>
		            </ul>

			</div>
			<?php
				$args = array( 'post_type' => 'check', 'name' => 'informations' );
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) :

					while($loop->have_posts()):
						$loop->the_post();

			?>
			<div class="sep" <?php post_class(); ?>>
				<hgroup>
					<h2 class='titre'>Contact</h2>
					<h4>Coordonées</h4>
				</hgroup>

					<?php the_content(); ?>

			</div>
			<?php
				endwhile;
				endif;
			?>
		</div>

		<div id="news">
			<h2>Dernières news</h2>
			<?php
				query_posts('showposts=3');
				if(have_posts()):
				while(have_posts()):

				the_post();
			?>
			<?php global $more; $more = 0; ?>

				<article class="dbf">
				<?php the_post_thumbnail('folio-works'); ?>
					<hgroup>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<h4><?php _e('Publié le') ?> <?php echo get_the_date(); ?></h4>
					</hgroup>
					<div class="art" <?php post_class(); ?>>
					    <?php the_content(); ?>
					</div>

				</article>


			<?php
				endwhile;
				endif;
			?>
		</div>
	</div>
<?php
	get_footer();

?>
