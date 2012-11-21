<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language') ?>"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name') ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width">
        <meta name="Author" content="Etienne Denoel, WebDesigner. http://www.etiennedenoel.be" >
        <meta name="Keywords" content="etienne, denoel, denoël, etienne denoel, internet, design, web, webdesign, web design, site, création, creation, créations, creations, webdeveloper, webdevelopper, web developer, web developper, portfolio, portefolio, infographiste, infographie, liège, belgique, wallonie, haccourt, seraing, inpres" >
        <link rel="icon" type="image/ico" href="<?php bloginfo('template_url') ?>/img/favicon.ico" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
        
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
            <div id="larg">
            <div id="slider">
                         <ul>				
                                 <li><a href="http://etiennedenoel.be/works/affiche-de-soiree/"><img src="<?php bloginfo('template_url') ?>/img/slide/01.png" width="900" height="280" alt="Affiche de soirée Agel - Etienne Denoel" /></a></li>
                                 <li><a href="http://etiennedenoel.be/works/logo-personnel/"><img src="<?php bloginfo('template_url') ?>/img/slide/02.png" width="900" height="280" alt="Logo Etienne Denoel WebDesigner" /></a></li>
                                 <li><a href="http://etiennedenoel.be/works/affiche-de-personnage/"><img src="<?php bloginfo('template_url') ?>/img/slide/03.png" width="900" height="280" alt="Affiche de personnage Lapins crétins - Etienne Denoel" /></a></li>
                                 <li><a href="http://etiennedenoel.be/works/affiche-minimaliste/"><img src="<?php bloginfo('template_url') ?>/img/slide/04.png" width="900" height="280" alt="Affiche minimaliste How to train your Dragon - Etienne Denoel" /></a></li>
                         </ul>
                 </div>
            </div>
        </div>

