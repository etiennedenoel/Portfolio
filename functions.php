<?php

	add_action( 'widgets_init', 'portfolio_sidebars' );
	add_action( 'after_setup_theme', 'portfolio_setup');
	add_action('init', 'create_post_type');
	add_action('init', 'build_taxonomies');

	if( ! function_exists('portfolio_sidebars')){
		function portfolio_sidebars(){
			register_sidebar(
				array(
					'id' => 'primary',
					'name' => __('Primary'),
					'description' => __('A shot description of the sidebar'),
					'before_widget' => '<div id="%1s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);
			register_sidebar(
				array(
					'id' => 'secondary',
					'name' => __('Secondary'),
					'description' => __('A shot description of the sidebar'),
					'before_widget' => '<div id="%1s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);

		}
	}
	if (! function_exists('portfolio_setup')){
		function portfolio_setup(){
			add_theme_support( 'post-thumbnails');
			add_theme_support('post-formats', array('aside', 'link', 'gallery', 'statuts', 'quote', 'image'));
			add_theme_support('custom-fields');
			if ( function_exists( 'add_theme_support' ) ) {
				add_theme_support( 'post-thumbnails' );
				set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
				
				// additional image sizes
				// delete the next line if you do not need additional image sizes
				add_image_size( 'posta', 250, 300 ); //300 pixels wide (and unlimited height)
				add_image_size( "folio-work", 200, 200, true);
				add_image_size( "folio-works", 200, 200, true);
				add_image_size( "folio-work118", 250, 400, true); 
			}
			register_nav_menu('header_menu', __('Header Menu', 'portfolio'));
		}
	}
if (! function_exists('create_post_type')){
	function create_post_type(){
		register_post_type(
			'works', array(
				'labels' => array('name' => __('Travaux'),
				'singular_name' => __('Travail') 
				),
				'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'excerpt'),
				'public' => true,
				'has_archive' => true )
				);
		register_post_type(
			'about', array(
				'labels' => array('name' => __('A propos'),
				'singular_name' => __('Info') 
				),
				'supports' => array('title', 'editor', 'thumbnail', 'post-formats'),
				'public' => true,
				'has_archive' => true )
				);
		register_post_type(
			'skills', array(
				'labels' => array('name' => __('C.V.'),
				'singular_name' => __('Competence') 
				),
				'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'custom-fields'),
				'public' => true,
				'has_archive' => true )
				);
		register_post_type(
			'check', array(
				'labels' => array('name' => __('Contacts'),
				'singular_name' => __('Contact') 
				),
				'supports' => array('title', 'editor', 'thumbnail', 'post-formats'),
				'public' => true,
				'has_archive' => true )
				);
		register_post_type(
			'ci', array(
				'labels' => array('name' => __("Centres d'interêts"),
				'singular_name' => __('CI') 
				),
				'supports' => array('title', 'editor', 'thumbnail', 'post-formats'),
				'public' => true,
				'has_archive' => true )
				);
		
		
	}
}

if(! function_exists('build_taxonomies')){
	function build_taxonomies(){
		register_taxonomy('techniques', 'works', array('label' => 'Techniques utilisées', 'hierarchical' => true, 'query_var' => true, 'rewrite' => true));		register_taxonomy('motsclefs', 'post', array('label' => 'mots-clefs', 'hierarchical' => true, 'query_var' => true, 'rewrite' => true));
	}
}

remove_filter('the_content','wpautop');

if ( ! function_exists( 'portfolio_comment' ) ) :

function portfolio_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'portfolio' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'portfolio' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s le %2$s <span class="says">dit:</span>', 'portfolio' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s à %2$s', 'portfolio' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'portfolio' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Votre commentaire est en attente de validation.', 'portfolio' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Répondre <span>&darr;</span>', 'portfolio' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for portfolio_comment()
if ( ! function_exists( 'portfolio_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function portfolio_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'portfolio' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'portfolio' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'portfolio' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // portfolio_content_nav
	