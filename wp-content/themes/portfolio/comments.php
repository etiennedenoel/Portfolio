	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'Cet article est prot?ger par un mot de passe. Entrez le mot de passe pour commenter', 'portfolio' ); ?></p>
	</div><!-- #comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
				printf( _n( 'Un commentaire pour &ldquo;%2$s&rdquo;', '%1$s commentaires pour &ldquo;%2$s&rdquo;', get_comments_number(), 'portfolio' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'portfolio' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Anciens commentaires', 'portfolio' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Commentaires r?cents &rarr;', 'portfolio' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist" itemprop="comment">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use portfolio_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define portfolio_comment() and that will be used instead.
				 * See portfolio_comment() in portfolio/functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'portfolio_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'portfolio' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Anciens commentaires', 'portfolio' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Commentaires r?cents &rarr;', 'portfolio' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php _e( 'Les commentaires sont ferm?s', 'portfolio' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
