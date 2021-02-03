<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport"
	          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
        <title>
            <?php
                if (is_front_page()) {
                    echo 'Accueil';
                } else {
                    echo the_title();
                }
            ?>
        </title>
        <?php wp_head(); ?>
	</head>
	<body>
       <nav class="navbar navbar-expand-lg navbar-light">
           <div class="container-fluid">
               <a class="navbar-brand col-2" href="<?= get_home_url() ?>">
                   <img src="<?php bloginfo('template_url'); ?>/assets/img/logo/Logo.svg" alt="Logo">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                   <?php wp_nav_menu([
                       'theme_location' => 'header', 'container' => false,
                       'menu_class' => 'navbar-nav',
                   ]) ?>
               </div>
           </div>
       </nav>
    <div class="container">