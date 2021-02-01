<?php
get_header();
//?>
	<main class="container">
    <?php
		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
                <h1 class="text-center"><?php the_title(); ?></h1>
            <div class="intro">
                <?php the_content() ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <?php $args = array(
          'post_types' => 'ecarts',
          'posts_per_page' => 3,
          'order' => 'ASC'
        );
        $myQuery = new WP_Query($args);
        ?>

        <h2>Les écarts de salaires entre les hommes et les femmes</h2>
        <div class="row">
            <?php if ($myQuery->have_posts()) : ?>
                <?php while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
                    <div class="col-12 col-md-4 ecarts">
                        <a href="ecarts/<?php the_permalink(); ?>">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="Image de l'article">
                            <h3><?php the_title() ?></h3>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <a href="ecarts">Découvrire les articles...</a>

		<?php $args = array(
			'post_types' => 'access',
			'posts_per_page' => 3,
			'order' => 'ASC'
		);
		$myQuery = new WP_Query($args);
		?>

        <h2>L'accès des femmes aux postes à résponsabilités</h2>
        <div class="row">
			<?php if ($myQuery->have_posts()) : ?>
				<?php while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
                    <div class="col-12 col-md-4 ecarts">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="Image de l'article">
                            <h3><?php the_title() ?></h3>
                        </a>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
        </div>
        <a href="access">Découvrire les articles...</a>
    </main>
<?php
get_footer();