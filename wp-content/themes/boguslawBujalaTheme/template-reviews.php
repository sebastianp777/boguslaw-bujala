<?php /* Template Name: Reviews */ get_header();


$getReview = get_posts(array(
    'post_type' => 'review',
    'order' => 'ASC',
    'orderby' => 'date',
    'numberposts' => -1,
));

?>

<?= get_template_part('inc/hero__section--global'); ?>


<section class="review__section">

    <?php if ($getReview) :?>
        <div class="review__section__inner">
            <?php foreach ($getReview as $getReview) : ?>
                <div class="review__section__inner--in">
                    <div class="review__section__inner--all">
                        <div class="review__section__inner__div" id="<?= $getReview->post_name ?>">
                            <div class="review__section__inner__div__bg"></div>
                            <div class="review__section__inner__div--add">
                                <div class="review__section__inner__div__text">
                                    <h2><?php the_field('reviews_heading', $getReview); ?></h2>
                                    <div>
                                        <?php the_field('reviews_text', $getReview); ?>
                                    </div>
                                     <?php if(get_field('reviews_read_the_review', $getReview)): ?>
                                        <a class="btn read-more desktop-inline" data-id="<?= $getReview->ID ?>">Przeczytaj Recenzję</a>
                                    <?php endif;?>
                                    <?php if(get_field('reviews_read_the_review', $getReview)): ?>
                                        <a class="btn read-more mobile--spec" data-id="<?= $getReview->ID ?>">Więcej</a>
                                    <?php endif;?>
                                </div>
                                <div class="div-in">
                                    <?php $reviews_img = get_field( 'reviews_img', $getReview );
                                    if ( $reviews_img ) :
                                        $imageurl = wp_get_attachment_image_url($reviews_img, 'full');?>
                                        <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
                                    <?php endif;?>
                                    <?php if(get_field('reviews_read_the_review', $getReview)): ?>
                                        <a class="btn read-more mobile" data-id="<?= $getReview->ID ?>">Więcej</a>
                                    <?php endif;?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(get_field('reviews_read_the_review', $getReview)): ?>
                        <div class="full-information" id="<?= $getReview->ID ?>">
                            <div class="full-information--text">
                                <?php the_field('reviews_read_the_review', $getReview); ?>
                                    <a class="btn show-less" data-id="<?= $getReview->ID ?>" data-div="<?= $getReview->post_name ?>">ZWIŃ RECENZJĘ</a>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif;?>

</section>

<?php get_footer(); ?>


