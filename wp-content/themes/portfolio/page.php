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
	<section id="content">
		<p>page</p>
	</section>
<?php
	get_footer();

?>
