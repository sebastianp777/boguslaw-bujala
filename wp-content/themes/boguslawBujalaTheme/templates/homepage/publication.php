<?php
  $getPublications = get_posts(array(
    'post_type' => 'publications',
    'order' => 'DESC',
    'orderby' => 'date',
    'numberposts' => -1,
));
?>


<section class="homepage__publications">
    <div class="container">
        <div class="header__div">
            <h2 class="header--h2">Publikacje</h2>
        </div>
        <?php if ($getPublications) :?>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php $i=1; foreach ($getPublications as $getPublications):?>
                    <?php $img = get_field('homepage_publications_image', $getPublications); ?>
                    <div class="swiper-slide">
                        <div class="swiper-border-partners">
                            <?php if($img):
                                $url = wp_get_attachment_url($img, 'full');?>
                                <img id="image-<?php echo $i ?>"  data-id="image-<?= $i ?>" src="<?= $url ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php $i++; endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="swiper-navigation">
        <div class="swiper-button-prev-custom-our"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/ionic-arrow-dropleft.svg" alt=""></div>
        <div class="swiper-button-next-custom-our"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/ionic-arrow-dropright.svg" alt=""></div>
    </div>
</section>
