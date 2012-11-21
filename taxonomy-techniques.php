<?php
	get_header();
?>


<?php
    $term = get_term_by("slug", get_query_var("term"), get_query_var("taxonomy"));
?>

<section id="content">
    <h2 class="titre tax">Travaux dans: <?php echo($term -> name); ?></h1>
    <div id="gallery">
			<ul>
    <?php
        if(have_posts()):
        while(have_posts()):
        the_post();
    ?>
    
            <li>
					<div class="<?php post_class(); ?>">
						<a href="<?php the_permalink(); ?>" title="Vers <?php the_title(); ?>"><?php the_post_thumbnail('folio-work'); ?></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<h4 class="tech"><?php echo(get_the_term_list($post->ID, "techniques")); ?></h4>
						<p><?php the_excerpt(); ?></p>
						<a class='plusInf' href="<?php the_permalink(); ?>" title="Plus d'informations sur le travail">Plus d'infos</a>
						
					</div>
					</li>
    
    
    <?php
            endwhile;
            endif;
    ?>
    </ul>
		</div>
</section>
<?php
	get_footer();
?>