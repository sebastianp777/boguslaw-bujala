<?php /* Template Name: Audio Video*/ get_header();

  $audio_video = get_posts(array(
    'post_type' => 'audio_video',
    'order' => 'ASC',
    'orderby' => 'date',
    'numberposts' => -1,
));

$audio_video_heroimage = get_field('audio_video_heroimage');
if ( $audio_video_heroimage ) :
     $audiovideourl = wp_get_attachment_image_url($audio_video_heroimage, 'full');?>
<?php endif; ?>

<section class="audio-video__section">
    <div class="audio-video-hero-image" style="background-image: url(<?= $audiovideourl ?>);"></div>
        <?php if ($audio_video) :?>
            <div class="audio-video__section__inner">
                <?php foreach ($audio_video as $audio_video) :
                    if(get_field('audio_video_post_type', $audio_video) == 'video'):
                        if ( have_rows( 'audio_video_post_video', $audio_video ) ) :
                            while ( have_rows( 'audio_video_post_video', $audio_video ) ) : the_row(); ?>

                                    <div class="video__div">
                                        <div class="video__div__description">
                                            <div class="video-description"><?= the_sub_field('text', $audio_video); ?>
                                                <?php
                                                $button = get_sub_field('button', $audio_video);
                                                if ( $button ): ?>
                                                    <a class="btn" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="embed-container">
                                            <?php the_sub_field('link', $audio_video); ?>
                                        </div>
                                    </div>

                            <?php endwhile;
                        endif;
                    endif;
                    if (get_field('audio_video_post_type', $audio_video) == 'audio'):
                        if ( have_rows( 'audio_video_post_audio', $audio_video ) ) :
                            while ( have_rows( 'audio_video_post_audio', $audio_video ) ) : the_row(); $i=1 ?>
                                <div class="audio__div">
                                    <div class="container-md-hero">
                                        <div class="row">
                                            <?php $image = get_sub_field( 'image' );
                                                if ( $image ) :
                                                    $imageurl = wp_get_attachment_image_url($image, 'full');?>
                                                    <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
                                            <?php endif;?>
                                            <div class="audio-with-text col-md-8">
                                                <div class="audio__div__description">
                                                    <div class="audio-description">
                                                        <?= the_sub_field('text', $audio_video); ?>
                                                    </div>
                                                </div>
                                                <div class="embed-container">
                                                    <audio id="audiotrack" preload="auto">
                                                        <source src="<?= get_sub_field('link', false, false, $audio_video); ?>" type="audio/mpeg">
                                                    </audio>

                                                    <div class="player--div player--div-gb">
                                                        <div class="player-wrapper">
                                                            <div id="player">

                                                                <div id="track">
                                                                    <div id="progress">
                                                                    </div>
                                                                    <span></span>
                                                                </div>

                                                                <div id="controls" class="<?= $audio_video->ID ?>">
                                                                    <div class="icon" id="stop">
                                                                        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ionic-ios-repeat.svg" alt="">
                                                                    </div>
                                                                    <div class="controls--play-mid">
                                                                        <div class="icon" id="skip-prev">
                                                                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-skip-previous.svg" alt="">
                                                                        </div>
                                                                        <div class="icon" id="play">
                                                                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-play-circle-outline.svg" alt="">
                                                                        </div>
                                                                        <div class="icon" id="pause">
                                                                            <i class="fas fa-pause"></i>
                                                                        </div>
                                                                        <div class="icon" id="skip-next">
                                                                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-skip-next.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="controls--volum-r">
                                                                        <div class="icon" id="mute">
                                                                            <img class="lazy icon-muted" src="<?php echo get_template_directory_uri(); ?>/img/feather-volume-1.svg" alt="">
                                                                        </div>
                                                                        <div id="volume">
                                                                            <div id="level"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php $homepage_love_btn = get_field( 'homepage_love_btn' ); ?>
                                                        <?php if ( $homepage_love_btn ) { ?>
                                                                <a class="btn player-btn" href="<?php echo $homepage_love_btn['url']; ?>"><?php echo $homepage_love_btn['title']; ?></a>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++; endwhile;
                         endif;
                    endif;
                endforeach; ?>
            </div>
        <?php endif;?>
</section>

<?php get_footer(); ?>

