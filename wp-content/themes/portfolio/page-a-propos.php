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
		<div id="formation">
			<?php rewind_posts(); ?>
			<?php
				if(have_posts()):
				while(have_posts()):

				the_post();
			?>
			<div class="ab">
				<?php the_post_thumbnail('folio-work118'); ?>
				<h2 class="titre">En quelques lignes</h2>
				<?php the_content(); ?>


			</div>
			<?php
				endwhile;
				endif;
			?>



			<?php
				$args = array( 'post_type' => 'about');
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) :

					while($loop->have_posts()):
						$loop->the_post();

			?>
			<div class="ab">
				<?php the_post_thumbnail('folio-work118'); ?>
				<a href="<?php the_permalink(); ?>" title="Vers <?php the_title(); ?>"  hreflang="fr"></a>
				<h2 class="titre ul"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
			<?php
				endwhile;
				endif;
			?>
					<div class="ab">
					<h2 class="titre">Centres d'intérêts</h2>
					<ul>


					<?php
						$args = array( 'post_type' => 'ci');
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) :

							while($loop->have_posts()):
								$loop->the_post();

					?>

						<li><?php the_content(); ?></li>

					<?php
						endwhile;
						endif;
					?>
					</ul>
					</div>
		</div>
	</div>

<?php
	get_footer();

?>
