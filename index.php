<?php get_header(); ?>

	<main class="main" role="main">

		<!-- section -->
		<section>

			<h1>Nejnovější příspěvky</h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
