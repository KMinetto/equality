<?php
	get_header();
?>

<div class="container">
    <div class="row">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-blue">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Les écarts des salaires des hommes et des femmes dans le monde du travail</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>
    </div>
    <div class="row mb-2">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
                <div class="col-12 col-md-6">
                    <div class="row g-0 border rounded overflow-hidden d-flex flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-relative text-black">
                            <strong class="d-inline-block mb-2 text-primary"><?php the_category(); ?></strong>
                            <h3 class="mb-0"><?php the_title(); ?></h3>
                            <div class="mb-1 text-muted"><?php the_date(); ?></div>
                            <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
                            <a class="stretched-link" href="<?php the_permalink(); ?>">Voir l'article</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img width="250" height="250" src="<?php the_post_thumbnail_url(); ?>" alt="Image liée à l'article">
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</div>

<?php
	get_footer();
?>
