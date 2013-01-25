<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
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
				<section id="primary">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Résultats de la recherche pour: %s', 'portfolio' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>
<section class="dbf">
				<?php portfolio_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'content', get_post_format() );
					?>
					<?php global $more; $more = 0; ?>

					<article class="search">
					<?php the_post_thumbnail('folio-work'); ?>
						<section class="contenu">
							<hgroup>
								<h3 class="search"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</hgroup>
							<div class="search" <?php post_class(); ?>>
							    <?php the_content(); ?>
							</div>
						</section>
					</article>



				<?php endwhile; ?>
</section>
				<?php portfolio_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Aucun résultat', 'portfolio' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( "Désolé, nous n'avons rien trouvé. Essayez avec d'autres mots-clefs", 'portfolio' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>


		</section><!-- #primary -->
</div><!-- #content -->
<?php get_footer(); ?>
