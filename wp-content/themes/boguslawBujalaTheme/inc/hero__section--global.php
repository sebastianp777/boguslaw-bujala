<?php $homepage_background_image = get_field('home_page_hero_image_photo', 15);
    if ( $homepage_background_image ) :
    $url = wp_get_attachment_image_url($homepage_background_image, 'full');?>
<?php endif; ?>


<section class="hero-section hero-section--global">
    <div class="hero-section__bg lazy" style="background-image: url(<?= $url ?>); ">
        <div class="hero-section--text-div">
            <h2 class="hero-section__bg__h2"><?= the_title(); ?></h2>
            <div class="container-md-hero">
                <?php $heroGlobImage1 = get_field( 'hero_image_global_image_1' );
                      $heroGlobImage2 = get_field( 'hero_image_global_image_2' );
                    if ( $heroGlobImage1 ) : ?>
                    <div class="row row--global--default-page">
                        <?php $imageurl = wp_get_attachment_image_url($heroGlobImage1, 'full');?>
                        <div class="img-with-button desktop-small">
                            <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
                            <a class="btn" href="#afabulacje-i-aliteracje">Afabulacje<br/> i aliteracje</a>
                        </div>

                        <div class="hero-section--text-div--p">
                            <div class=""><?php the_field('hero_image_global_text_1'); ?></div>
                        </div>
                        <div class="all-div-inner">
                            <div class="img-with-button mobile-small">
                                <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
                                <a class="btn" href="#afabulacje-i-aliteracje">Afabulacje<br/> i aliteracje</a>
                            </div>
                            <?php if ( $heroGlobImage2 ) :
                                $imageurl2 = wp_get_attachment_image_url($heroGlobImage2, 'full');?>
                                <div class="img-with-button">
                                    <img class="lazy lazy-loading" data-src="<?= $imageurl2 ?>" alt=""/>
                                    <a class="btn" href="#post-romana">Post(a)<br/>Romana</a>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php elseif(get_field('hero_image_global_text_2')):?>
                        <div class="hero-section--text-div--p">
                            <div class="col-md-6"><?php the_field('hero_image_global_text_1'); ?></div>
                            <div class="col-md-6"><?php the_field('hero_image_global_text_2'); ?></div>
                        </div>
                    <?php else:?>
                        <div class="hero-section--text-div--p">
                            <div class="col-md-12"><?php the_field('hero_image_global_text_1'); ?></div>
                        </div>
                    <?php endif;?>
            </div>
        </div>
    </div>
</section>