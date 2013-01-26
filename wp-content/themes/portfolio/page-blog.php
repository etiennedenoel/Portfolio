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
		<?php
			get_sidebar('primary');
		?>
        <div id="newsB">

        	<section>
        		<h2 class="cache">Blog</h2>
        		<?php
					query_posts('posts_per_page= 5');
					if(have_posts()):
					while(have_posts()):

					the_post();
				?>
				<?php global $more; $more = 0; ?>

					<article class="dbf" itemscope="" itemtype="http://schema.org/Blog">
						<?php the_post_thumbnail('folio-works'); ?>
						<hgroup>
							<h3 itemprop="name"><a href="<?php the_permalink(); ?>" title="Aller vers <?php the_title(); ?>" hreflang="fr"><?php the_title(); ?></a></h3>
							<h4 itemprop="datePublished"><?php _e('Publié le') ?> <?php echo get_the_date(); ?></h4>
						</hgroup>
						<div itemprop="description" <?php post_class(); ?>>
						    <?php the_content(); ?>
						</div>

					</article>

				<?php
					endwhile;
					endif;
				?>
				<?php wp_pagenavi(); ?>
        	</section>

		</div>
	</div>
<?php
	get_footer();

?>
