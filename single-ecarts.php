<?php
	get_header();
?>
<!-- TODO Responsive de ces cartes !!!-->
<div class="container">
	<div class="row">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-12">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <p class="col-12">
                        <img class="thumb-single" src="<?php the_post_thumbnail_url(); ?>" alt="Image lié à l'article">
                    </p>
                </div>
				<div class="col-12">
					<?php the_content(); ?>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php
get_footer();