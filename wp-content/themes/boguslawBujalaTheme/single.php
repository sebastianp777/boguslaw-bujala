<?php get_header(); ?>

	<main role="main">
	<section class="blog-post-single">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container-sm">

				<div class="blog-post-single__heading">
					<a class="" title="<?php the_title(); ?>">
						<?php the_post_thumbnail();  ?>
					</a>
				</div>
				<div class="post-content">
					<div class="blog-post-single__heading__div">
						<?php $category_id = (get_the_category($post->ID)[0]->term_id); ?>
						<a href="<?= get_category_link($category_id); ?>">
							<p class="category-post-info"><?= get_the_category($post->ID)[0]->name ?></p>
						</a>
					</div>
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<?php the_content();  ?>

					<?php
					if( get_field('blog_add_register_button') == 'yes' ):
						$link = get_field('blog_register_btn_link' ); ?>
						<?php if ( $link ) : ?>
							<div class="blog-add-register-div">
								<a class="blog-add-register-button btn" href="<?php echo esc_url( $link) ; ?>"><span><?php the_field('blog_register_btn_link_text'); ?></span></a>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</article>

		<div class="blog-post-single__cta">
			<h3>Może Cię zainteresować</h3>
			<a class="btn" href="<?= get_category_link($category_id); ?>">Zobacz więcej z tej kategorii</a>
		</div>
		<div class="container">
			<div class="row">
				<?= do_shortcode('[lastest-post]'); ?>
			</div>
		</div>

	<?php endwhile; ?>

	<?php else: ?>

		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>

	<?php endif; ?>

	</section>

	</main>

<?php get_footer(); ?>
