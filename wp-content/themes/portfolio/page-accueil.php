
<?php
	get_header();
?>

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
<div id="content" role="main">
	<div id="accuP">
      	<div id="imageFond">
      		<img width="880" height="524" alt="Etienne Denoel WebDesigner & WebDeveloper" src="http://static.etiennedenoel.be/img/moi2.jpg" />
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
			<div class="sep" itemscope="" itemtype="http://schema.org/JobPosting">
				<hgroup>
					<h3 class="titre">Compétences</h3>
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
		                    <li itemprop="skills"><?php the_content(); ?><span class="rate"><span class="<?php echo get_post_meta($post->ID, 'classe', true); ?>">.</span></span></li>
		                <?php
		                    endwhile;
		                    endif;
		                ?>
		            </ul>

			</div>
			<div class="sep">
			<?php
				$args = array( 'post_type' => 'check', 'name' => 'informations' );
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) :
					while($loop->have_posts()):
						$loop->the_post();
			?>
				<hgroup>
					<h3 class='titre'>Contact</h3>
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
			<section>
				<h2>Dernières news</h2>
				<?php
					query_posts('showposts=3');
					if(have_posts()):
					while(have_posts()):

					the_post();
				?>
				<?php global $more; $more = 0; ?>

					<article role="article"  class="dbf">
					<?php the_post_thumbnail('folio-works'); ?>
						<hgroup>
							<h3><a href="<?php the_permalink(); ?>" title="Aller vers <?php the_title(); ?>"  hreflang="fr"><?php the_title(); ?></a></h3>
							<h4><?php _e('Publié le') ?> <?php echo get_the_date(); ?></h4>
						</hgroup>
						<div class='art'>
						    <?php the_content(); ?>
						</div>

					</article>


				<?php
					endwhile;
					endif;
				?>
			</section>

		</div>
	</div>
</div>
<style type="text/css">
	i, .social{display: none;}
	.city{margin-left: 0;}
</style>
<?php
	get_footer();

?>
