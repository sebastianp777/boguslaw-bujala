<?php $homepage_background_image = get_field('home_page_hero_image_photo', 15);
    if ( $homepage_background_image ) :
    $url = wp_get_attachment_image_url($homepage_background_image, 'full');?>
<?php endif; ?>


<section class="hero-section">
    <div class="hero-section__bg lazy" style="background-image: url(<?= $url ?>); ">
        <div class="hero-section--text-div">
            <div class="container-md">
                <h2 class="hero-section__bg__h2"><?php the_field('home_page_hero_image_heading'); ?></h2>
                <div class="hero-section--text-div--p">
                    <p><?php the_field('home_page_hero_image_text_1'); ?></p>
                    <p><?php the_field('home_page_hero_image_text_2'); ?></p>
                    <p><?php the_field('home_page_hero_image_text_3'); ?></p>
                </div>
                <span><?php the_field('home_page_hero_image_signature'); ?></span>
            </div>
        </div>
    </div>
</section>