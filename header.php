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
	<body class="font-sans">
    <!-- component -->
       <header class="bg-blue-300">
           <nav class="relative p-4 select-none bg-grey lg:flex lg:items-stretch w-full">
               <div class="flex flex-no-shrink items-stretch h-20">
                   <img src="<?php bloginfo('template_url') ?>/assets/img/logo/Logo.svg" alt="">
                   <a href="index.php" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white text-lg lg:text-2xl no-underline flex items-center hover:bg-grey-dark">Égalité homme/femme</a>
                   <button class="block lg:hidden cursor-pointer ml-auto relative w-12 h-12 p-4">
                       <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                   </button>
               </div>
               <div class="lg:flex m-1 lg:m-0 lg:items-stretch lg:flex-no-shrink lg:flex-grow">
                   <div class="lg:flex lg:items-stretch lg:justify-end ml-auto">
                       <a href="#" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white text-md lg:text-xl no-underline flex items-center hover:bg-grey-dark">Écart des salaires hommes/femmes</a>
                       <a href="#" class="flex-no-grow flex-no-shrink relative py-2 px-4 leading-normal text-white text-md lg:text-xl no-underline flex items-center hover:bg-grey-dark">Accès des femmes aux postes à responsébilités</a>
                   </div>
               </div>
           </nav>
       </header>