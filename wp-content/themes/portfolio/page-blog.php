<?php
	get_header();
?>

<div id="content">
		<?php
			get_sidebar('primary');
		?>
                <div id="newsB">

				<?php
					query_posts('posts_per_page= 5');
					if(have_posts()):
					while(have_posts()):

					the_post();
				?>
				<?php global $more; $more = 0; ?>
				<section class="dbf">
					<article>
					<?php the_post_thumbnail('folio-works'); ?>
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
				<?php wp_pagenavi(); ?>
		</div>

            </div>
<?php
	get_footer();

?>
