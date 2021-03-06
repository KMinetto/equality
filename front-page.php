<?php
get_header();
?>
	<main>
        <h1 class="text-center">Les inégalités des femmes dans le monde du travail</h1>
    <?php
		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
                <h2 class="text-center"><?php the_title(); ?></h2>
            <div class="intro">
                <?php the_content() ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <div class="col-12 my-5">
            <img class="thumb-single" src="<?= bloginfo( 'template_url' ) ?>/assets/img/ecarts.jpg" alt="Image d'un ecart salarial">
        </div>

        <?php $args = array(
          'post_type' => 'ecarts',
          'posts_per_page' => 3,
          'order' => 'ASC'
        );
        $myQuery = new WP_Query($args);
        ?>

        <h2 class="text-center">Les écarts de salaires entre les hommes et les femmes</h2>
        <h4 class="mt-4 text-center">
            En temps plein, les femmes touchent 16,8 % de moins que les hommes. Plus on s’élève sur l’échelle des
            salaires, plus les écarts entre femmes et hommes sont grands.
        </h4>
        <div class="row mt-3 d-lg-flex justify-content-lg-between">
            <?php if ($myQuery->have_posts()) : ?>
                <?php while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
                <div class="card p-0 col-12 col-lg-4 mt-5">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Image de l'article">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn bg-blue text-white">Voir l'article</a>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
       <a href="ecarts" class="btn btn-block btn-primary mt-4">Découvrir les articles...</a>
        <div class="col-12 my-5">
            <img src="<?= bloginfo( 'template_url' ) ?>/assets/img/access.png" alt="Image parlant du plafond de verre" class="thumb-single">
        </div>

		<?php $args = array(
			'post_type' => 'access',
			'posts_per_page' => 3,
			'order' => 'ASC'
		);
		$myQuery = new WP_Query($args);
		?>

        <h2 class="text-center">L'accès des femmes aux postes à résponsabilités</h2>
        <h4 class="mt4 text-center">
            Près de 57% des personnes interrogées indiquent qu’il est plus facile d’attirer et de retenir des personnes
            de talent. Plus de 54% disent avoir constaté des progrès en termes de créativité, d’innovation et d’ouverture,
            autant déclarent que le fait de privilégier effectivement la parité a renforcé l’image de marque de leur entreprise,
            et près de 37% estiment que cela leur permet de mieux évaluer l’opinion des clients.
        </h4>
        <div class="row mt-3 d-flex justify-content-between">
			<?php if ($myQuery->have_posts()) : ?>
				<?php while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
                    <div class="card p-0 col-12 col-lg-4 mt-5">
                        <img class="card-img-top thumb-single" src="<?php the_post_thumbnail_url() ?>" alt="Image de l'article">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn bg-pink text-white">Voir l'article</a>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
        </div>
        <a id="accessPost" class="text-end my-4 btn btn-block" href="access">Découvrir les articles...</a>
    </main>
<?php
get_footer();
?>