<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<?= get_template_part('inc/hero__section--global'); ?>

		<section class="default-page">
				<div class="container-md-hero">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- <h2 class="title__h2"><?php the_title(); ?></h2> -->
					<?php the_content(); ?>

					<br class="clear">

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Niestety, nie ma nic do wyświetlenia.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>
			</div>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
