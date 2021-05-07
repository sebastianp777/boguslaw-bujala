<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="search-results">

			<h1 class="search-results__h1"><?php echo sprintf( __( '%s WYNIKI WYSZUKIWANIA ', 'html5blank' ), $wp_query->found_posts ); ?></h1>
			<h1 class="search-results__h1--red"><?php echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
