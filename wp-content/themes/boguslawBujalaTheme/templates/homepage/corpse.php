<sectio class="homepage__corpse">
    <div class="row">
        <?php $corpseImage = get_field( 'homepage_corpse_image' );
            if ( $corpseImage ) :
                $imageurl = wp_get_attachment_image_url($corpseImage, 'full');?>
                <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
        <?php endif;?>

        <div class="text-inner">
            <h2 class="header--h2"><?php the_field('homepage_corpse_heading'); ?></h2>
            <div class="">
                <?php the_field('homepage_corpse_text'); ?>
            </div>
            <?php $homepage_corpse_btn = get_field( 'homepage_corpse_btn' ); ?>
            <?php if ( $homepage_corpse_btn ) { ?>
                    <a class="btn" href="<?php echo $homepage_corpse_btn['url']; ?>"><?php echo $homepage_corpse_btn['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</sectio>