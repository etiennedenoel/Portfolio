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
					if(have_posts()):
					while(have_posts()):
					the_post();
				?>
				<section class="dbf">
					<article class="single" itemscope="" itemtype="http://schema.org/Blog">

						<h2 class="titre" itemprop="name"><?php the_title(); ?></h2>
						<p class="dateP" itemprop="datePublished"><?php _e('Publié le') ?> <?php echo get_the_date(); ?> par <span itemprop="author"><?php echo get_the_author(); ?></span></p>

						<?php the_post_thumbnail('posta'); ?>
						<div itemprop="text" <?php post_class(); ?>>

							<?php the_content(); ?>
						</div>
						<div id="commentaires">
							<?php comments_template(); ?>
						</div>

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
