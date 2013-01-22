<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language') ?>"> <!--<![endif]-->
<!--[if lt IE 9]><script src="<?php echo get_bloginfo('template_directory') ;?>/js/vendor/modernizr.js"></script><![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name') ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width">
        <meta name="Author" content="Etienne Denoel, WebDesigner. http://www.etiennedenoel.be" >
        <meta name="Keywords" content="etienne denoel, internet, design, web, web design, site, créations, creations, web developper, portfolio, infographiste, infographie, liège, belgique, inpres" >
        <link rel="icon" type="image/ico" href="<?php bloginfo('template_url') ?>/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />


        <?php wp_head(); ?>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/vendor/modernizr.js"></script>

    </head>
    <body>
    <div id="wrapper">
        <div id="header">
            <div id="headin">
                <!--[if lt IE 7]>
                    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
                <![endif]-->

                <!-- Add your site or application content here -->
                <div id="logo">
                    <h1><a href="<?php bloginfo('url') ?>/index.php"><img width="345px" height="88px" alt="Logo Etienne Denoel WebDesigner & WebDesigner" src="<?php bloginfo('template_url') ?>/img/logo.png"></a></h1>
                </div>
                <?php wp_nav_menu('header_menu') ?>
            </div>
        </div>
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


