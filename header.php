<?php

?>
<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport"
	          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
        <title><?php the_title() ?></title>
        <?php wp_head(); ?>
	</head>
	<body>
    <!-- Header -->
       <div class="container header">
           <div class="row">
               <header class="col-12 bg-transparent">
                   <nav class="navbar navbar-expand-md navbar-light bg-transparent d-flex h-100">
                       <div class="container-fluid">
                           <?php if (!is_front_page()) : ?>
                               <a id="logoLink" class="navbar-brand" href="../">
                                   <img class="mt-2" src="<?php bloginfo('template_url') ?>/assets/img/logo/Logo.svg" alt="Logo">
                               </a>
                           <?php else : ?>
                               <a id="logoLink" class="navbar-brand" href="#">
                                   <img class="mt-2" src="<?php bloginfo('template_url') ?>/assets/img/logo/Logo.svg" alt="Logo">
                               </a>
                           <?php endif; ?>
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="navbar-toggler-icon"></span>
                           </button>

                           <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                               <ul class="navbar-nav mb-2 mb-md-0 nav-expanded">
                                   <?php if (!is_front_page()) : ?>
                                       <li class="nav-item text-end text-md-start active">
                                           <a class="nav-link text-sm-end link text-white" aria-current="page" href="../ecarts">Ecart des salaires hommes/femmes</a>
                                       </li>
                                       <li class="nav-item text-end text-md-start">
                                           <a class="nav-link text-sm-end link text-white" href="../access">Accès des femmes aux postes à responsabilités</a>
                                       </li>
                                   <?php else : ?>
                                       <li class="nav-item text-end text-md-start active">
                                           <a class="nav-link text-sm-end link text-white" aria-current="page" href="ecarts">Ecart des salaires hommes/femmes</a>
                                       </li>
                                       <li class="nav-item text-end text-md-start">
                                           <a class="nav-link text-sm-end link text-white" href="access">Accès des femmes aux postes à responsabilités</a>
                                       </li>
                                   <?php endif; ?>
                               </ul>
                           </div>
                       </div>
                   </nav>
               </header>
           </div>
       </div>