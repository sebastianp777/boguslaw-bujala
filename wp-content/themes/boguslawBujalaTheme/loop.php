<div class="news-blog">
  <div class="container">
		<div class="news-blog__loop">
			<div class="row">
			<?php
			// global $query_string;
			// query_posts ('posts_per_page=11');

			if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(350,220)); ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<div class="loop-content-data">
						<?php $category_id = (get_the_category($post->ID)[0]->term_id); ?>
						<a href="<?= get_category_link($category_id); ?>">
							<p class="category-post-info"><?= get_the_category($post->ID)[0]->name ?></p>
						</a>
						<a class="main-heading" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

						<p class="loop-content-data__normal"><?php the_excerpt(); ?></p>
						<?php echo pixtricks_excerpt(); ?>

					</div>
					<!-- /post title -->

				</article>
				<!-- /article -->
			  <?php endwhile; ?>
			<?php else: ?>

				<!-- article -->
				<div class="no-post-info">
					<h2><?php _e( 'Nie ma dodanych żadnych wpisów', 'html5blank' ); ?></h2>
				</div>
				<!-- /article -->

			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
