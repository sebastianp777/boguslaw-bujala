<?php /* Template Name: Audio Video*/ get_header();

  $audio_video = get_posts(array(
    'post_type' => 'audio_video',
    'order' => 'ASC',
    'orderby' => 'date',
    'numberposts' => -1,
));

$getGallery = get_posts(array(
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
                <h2 class="hero-section__bg__h2"><?= the_title(); ?></h2>
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
                                            <?php if ( get_sub_field( 'link', $audio_video ) ) : ?>
                                                <?php the_sub_field('link', $audio_video); ?>
                                            <?php endif; ?>

                                            <?php if ( get_sub_field( 'file', $audio_video ) ) : ?>
                                                <video width="790px" height="450px" autobuffer="autobuffer"  loop="loop" controls="controls" poster="<?php echo get_template_directory_uri(); ?>/img/screen-video.jpg">
                                                    <source src="<?= get_sub_field('file', $audio_video); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                                </video>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                            <?php endwhile;
                        endif;
                    endif;
                    if (get_field('audio_video_post_type', $audio_video) == 'audio'):
                        if ( have_rows( 'audio_video_post_audio', $audio_video ) ) :
                            while ( have_rows( 'audio_video_post_audio', $audio_video ) ) : the_row(); $i=1 ?>
                                <div class="audio__div" id="<?= $audio_video->ID ?>">
                                    <div class="container-md-hero">
                                        <div class="row">
                                            <?php $image = get_sub_field( 'image' );
                                                if ( $image ) :
                                                    $imageurl = wp_get_attachment_image_url($image, 'full');?>
                                                    <img class="lazy lazy-loading book-front desktop-small" data-src="<?= $imageurl ?>" alt=""/>
                                            <?php endif;?>
                                            <div class="audio-with-text col-sm-8">
                                                <div class="audio__div__description">
                                                    <div class="audio-description">
                                                        <?= the_sub_field('text', $audio_video); ?>
                                                       <?php if ( $image ) :
                                                             $imageurl = wp_get_attachment_image_url($image, 'full');?>
                                                             <img class="lazy lazy-loading book-front mobile-small" data-src="<?= $imageurl ?>" alt=""/>
                                                         <?php endif;?>
                                                    </div>
                                                </div>
                                                <div class="embed-container">
                                                    <audio id="audiotrack" class="audiotrack" preload="auto">
                                                        <source src="<?= get_sub_field('link', false, false, $audio_video); ?>" type="audio/mpeg">
                                                    </audio>

                                                    <div class="player--div player--div-gb">
                                                        <div class="player-wrapper">
                                                            <div id="player">

                                                                <div id="track" class="track">
                                                                    <div id="progress" class="progress">
                                                                    </div>
                                                                    <span></span>
                                                                </div>

                                                                <div id="controls" class="controls">
                                                                    <div class="icon stop" id="stop">
                                                                        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ionic-ios-repeat.svg" alt="">
                                                                    </div>
                                                                    <div class="controls--play-mid">
                                                                        <div class="icon skip-prev" id="skip-prev">
                                                                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-skip-previous.svg" alt="">
                                                                        </div>
                                                                        <div class="icon play" id="play" data-id="<?= $audio_video->ID ?>">
                                                                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-play-circle-outline.svg" alt="">
                                                                        </div>
                                                                        <div class="icon pause" id="pause" data-id="<?= $audio_video->ID ?>">
                                                                            <i class="fas fa-pause"></i>
                                                                        </div>
                                                                        <div class="icon skip-next" id="skip-next">
                                                                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-skip-next.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="controls--volum-r">
                                                                        <div class="icon mute" id="mute">
                                                                            <img class="lazy icon-muted" src="<?php echo get_template_directory_uri(); ?>/img/feather-volume-1.svg" alt="">
                                                                        </div>
                                                                        <div id="volume" class="volume">
                                                                            <div id="level" class="level"></div>
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


        <?php if ($getGallery) :?>
            <div class="audio-video__section__gallery">
            <div class="container">
                <h2>Zdj??cia ze spotkania w Domu Literatury w ??odzi 2014</h2>
            </div>
                <div class="container-sm">
                    <div class="row">
                        <?php foreach ($getGallery as $getGallery) : ?>
                            <?php if (get_field('audio_video_post_type', $getGallery) == 'gallery'): ?>
                                <div class="gallery__div">
                                    <?php $audio_video_post_gallery = get_field( 'audio_video_post_gallery', $getGallery );
                                    if ( $audio_video_post_gallery ) :
                                        $imageurl = wp_get_attachment_image_url($audio_video_post_gallery, 'full');?>
                                        <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
                                    <?php endif;?>
                                </div>
                            <?php endif;
                        endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif;?>

</section>

<?php get_footer(); ?>

