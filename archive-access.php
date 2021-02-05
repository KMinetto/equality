<?php
get_header();
?>

<div class="container">
	<div class="row">
		<div class="p-md-5 mb-4 text-white rounded bg-pink">
			<div class="col-12 px-0 d-lg-flex">
				<div class="col-12 col-lg-6">
                    <h1 class="display-5 display-lg-4 font-italic text-center text-lg-left">L'accès des femmes aux postes à responsabilités</h1>
                </div>
				<div class="col-12 col-lg-6">
                    <p class="lead my-3">
                        Vous retrouverez ici les différents articles parlant des accès des femmes à des postes à responabilités.
                    </p>
                </div>
			</div>
		</div>
	</div>
	<div class="row mb-2">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-12 col-md-6">
					<div class="row g-0 border rounded overflow-hidden d-flex flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col d-flex flex-column justify-content-between position-relative text-black">
							<h4 class="mb-0"><?php the_title(); ?></h4>
							<a class="stretched-link" href="<?php the_permalink(); ?>">Voir l'article</a>
						</div>
                        <div class="col-auto d-none d-lg-block thumbnail-cards">
                            <img height="250" src="<?php the_post_thumbnail_url(); ?>" alt="Image liée à l'article">
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
