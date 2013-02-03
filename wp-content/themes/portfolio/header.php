<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language') ?>"> <!--<![endif]-->
<!--[if lt IE 9]><script src="<?php echo get_bloginfo('template_directory') ;?>/js/vendor/modernizr.js"></script><![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <title><?php bloginfo('name') ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="initial-scale=1.0">
        <meta name="Author" content="Etienne Denoel, WebDesigner. http://www.etiennedenoel.be" >
        <meta name="Keywords" content="etienne denoel, internet, design, web, web design, site, créations, creations, web developper, portfolio, infographiste, infographie, liège, belgique, inpres" >
        <link rel="icon" type="image/ico" href="<?php bloginfo('template_url') ?>/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/print.css" media="print" />

        <?php wp_head(); ?>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    </head>
    <body>
    <div id="wrapper">
        <header id="header">
            <div id="headin">
                <!--[if lt IE 7]>
                    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
                <![endif]-->

                <!-- Add your site or application content here -->
                <div id="logo" role="banner">
                    <h1><a href="<?php bloginfo('url') ?>/index.php" hreflang="fr" title="Etienne Denoel WebDesigner"><img width="345" height="88" alt="Etienne Denoel WebDesigner & WebDesigner" src="<?php bloginfo('template_url') ?>/img/logo.png"></a></h1>
                </div>
                <?php
                    $defaults = array(
                        'theme_location'  => '',
                        'menu'            => '',
                        'container'       => 'nav',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    );

                    wp_nav_menu( $defaults, 'header_menu' );

                ?>
            </div>
        </header>



