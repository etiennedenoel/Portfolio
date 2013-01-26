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
		<div id="formation" class="dbf">

					<?php
						$args = array( 'post_type' => 'about', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :
							while($loop->have_posts()):
								$loop->the_post();

					?>
					<div <?php post_class(); ?>>
						<a href="<?php the_permalink(); ?>" title="Vers <?php the_title(); ?>"><?php the_post_thumbnail('folio-work'); ?></a>
						<h3><a href="<?php the_permalink(); ?>" title="Vers <?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<?php the_content(); ?>
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
