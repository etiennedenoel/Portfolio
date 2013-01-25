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
	<div id="content">
		<div id="accuP">
                    <div id="imageFond"><img width="880px" height="524px" alt="Etienne Denoel WebDesigner & WebDeveloper" src="<?php bloginfo('template_url') ?>/img/moi.png" /></div>
		    <div id="pres" class="dbf">


			<?php
				$args = array( 'post_type' => 'skills', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) :

					while($loop->have_posts()):
						$loop->the_post();

			?>
			<div class="sep" <?php post_class(); ?>>
				<h2 class='titre'><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>

			</div>
			<?php
				endwhile;
				endif;
			?>
		    </div>
		</div>
		<div id="news">
			<h2>Dernières news</h2>

				<?php
					query_posts('showposts=3');
					if(have_posts()):
					while(have_posts()):

					the_post();
				?>
				<section class="dbf">
					<article>
					<?php the_post_thumbnail('folio-work'); ?>
						<hgroup>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4><?php _e('Publié le') ?> <?php echo get_the_date(); ?></h4>
						</hgroup>
						<div <?php post_class(); ?>>

							<?php the_content(); ?>
						</div>

					</article>

				</section>
				<?php
					endwhile;
					endif;
				?>
		</div>
	</div>

<?php
	get_footer();

?>
