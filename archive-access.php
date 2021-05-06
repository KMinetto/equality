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
	<div class="d-flex justify-content-between row mb-2">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="card-archive col-12 col-md-5 mt-5">
					<div class="row g-0 border rounded overflow-hidden d-flex flex-md-row mb-4 shadow-sm h-100 h-md-250 position-relative">
						<div class="col d-flex flex-column justify-content-between position-relative text-black">
							<h4 class="mb-0 title-archive"><?php the_title(); ?></h4>
							<a id="accessPost" class="stretched-link mt-5 btn btn-block" href="<?php the_permalink(); ?>">Voir l'article</a>
						</div>
                        <div class="col-auto d-none d-lg-block thumbnail-cards">
                            <img id="accessThumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="Image liée à l'article">
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
