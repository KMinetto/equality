<?php
get_header();
?>
	<main>
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

					<!-- Article -->
					<article class="overflow-hidden rounded-lg shadow-lg">

						<a href="#">
							<img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
						</a>

						<header class="flex items-center justify-between leading-tight p-2 md:p-4">
							<h1 class="text-lg">
								<a class="no-underline text-black font-serif" href="#">
									<?php the_title(); ?>
								</a>
							</h1>
							<p class="text-grey-darker text-sm">
								14/4/19
							</p>
						</header>
						<ul class="flex items-center justify-between leading-tight p-2 md:p-4">
							<li><?php the_category(); ?></li>
						</ul>
						<div class="flex items-center justify-between leading-tight p-2 md:p-4">
							<p><?php the_content() ?></p>
						</div>
						<footer class="flex items-center justify-between leading-none p-2 md:p-4">
							<a class="flex items-center no-underline text-black" href="#">
								<img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
								<p class="ml-2 text-sm">
									Author Name
								</p>
						</footer>

					</article>
					<!-- END Article -->

				</div>
			<?php endwhile; endif; ?>
	</main>
<?php
get_footer();