<section class="homepage__love">
        <div class="homepage__love__inner">
            <div class=""></div>
            <div class="homepage__love__inner__div">
                <h2 class="header--h2"><?php the_field('homepage_love_heading'); ?></h2>
                <div class="text-inner">
                    <div class="">
                        <?php the_field('homepage_love_text'); ?>
                    </div>
                    <div class="">
                        <?php the_field('homepage_love_text_2'); ?>
                    </div>
                </div>


                <?php $loveImage = get_field( 'homepage_love_image' );
                if ( $loveImage ) :
                    $imageurl = wp_get_attachment_image_url($loveImage, 'full');?>
                    <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
                 <?php endif;?>
            </div>
        </div>
</section>
