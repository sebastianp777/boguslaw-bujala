<section class="homepage__other">
        <div class="homepage__other__inner">
            <div class="homepage__other__inner__div">
                <h2 class="header--h2"><?php the_field('homepage_other_heading'); ?></h2>
                <p><?php the_field('homepage_other_text'); ?></p>
                <?php $otherImage = get_field( 'homepage_other_image' );
                if ( $otherImage ) :
                    $imageurl = wp_get_attachment_image_url($otherImage, 'full');?>
                    <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
                 <?php endif;?>
                 <a class="btn" href="">Dalej</a>
            </div>
        </div>
</section>
