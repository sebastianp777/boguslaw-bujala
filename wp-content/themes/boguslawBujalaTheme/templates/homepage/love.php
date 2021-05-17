<?php $loveImage = get_field( 'homepage_love_image' ); ?>
<section class="homepage__love">
        <div class="homepage__love__inner">
            <div class="homepage__love__inner__all">
            <?php if ( $loveImage ) :
                $imageurl = wp_get_attachment_image_url($loveImage, 'full');?>
                <img class="lazy lazy-loading loveImagePubli mobile-small" data-src="<?= $imageurl ?>" alt=""/>
            <?php endif;?>
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
                    <?php if ( $homepage_love_btn ) { ?>
                        <a class="btn player-btn mobile-small" href="<?php echo $homepage_love_btn['url']; ?>"><?php echo $homepage_love_btn['title']; ?></a>
                    <?php } ?>
                    <?php if ( $loveImage ) :
                        $imageurl = wp_get_attachment_image_url($loveImage, 'full');?>
                        <img class="lazy lazy-loading loveImagePubli desktop-small" data-src="<?= $imageurl ?>" alt=""/>
                     <?php endif;?>
                </div>

                <div class="player--div audio__div" id="front-audio-div">
                    <audio id="audiotrack" class="audiotrack" preload="auto" id="<?= $audio_video->ID ?>">
                        <source src="http://tobiasbogliolo.com/assets/media/verdi.ogg" type="audio/ogg">
                        <source src="http://tobiasbogliolo.com/assets/media/verdi.mp3" type="audio/mpeg">
                        <source src="http://tobiasbogliolo.com/assets/media/verdi.wa" type="audio/wav">
                    </audio>
                    <div class="player-icons-left">
                            <div id="controls" class="desktop-flex">
                                <div class="icon stop" id="stop">
                                    <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ionic-ios-repeat.svg" alt="">
                                </div>
                                <div class="icon mute" id="mute">
                                    <img class="lazy icon-muted" src="<?php echo get_template_directory_uri(); ?>/img/feather-volume-1.svg" alt="">
                                </div>
                                <div id="volume" class="volume">
                                    <div id="level" class="level"></div>
                                </div>
                            </div>
                        </div>
                        <div class="player-wrapper">
                            <div id="player">

                                <div id="track" class="track">
                                    <div id="progress" class="progress">
                                    </div>
                                    <span></span>
                                </div>

                                <div id="controls" class="controls mobile-flex">
                                    <div class="icon stop" id="stop">
                                        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ionic-ios-repeat.svg" alt="">
                                    </div>
                                    <div class="controls--play-mid">
                                        <div class="icon skip-prev" id="skip-prev">
                                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-skip-previous.svg" alt="">
                                        </div>
                                        <div class="icon play" data-id="front-audio-div" id="play">
                                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-play-circle-outline.svg" alt="">
                                        </div>
                                        <div class="icon pause" data-id="front-audio-div" id="pause">
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

                                <div id="controls" class="controls desktop-flex">
                                    <div class="icon skip-prev" id="skip-prev">
                                        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-skip-previous.svg" alt="">
                                    </div>
                                    <div class="icon play" data-id="front-audio-div" id="play">
                                        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-play-circle-outline.svg" alt="">
                                    </div>
                                    <div class="icon pause" data-id="front-audio-div" id="pause">
                                        <i class="fas fa-pause"></i>
                                    </div>
                                    <div class="icon skip-next" id="skip-next">
                                        <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/material-skip-next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $homepage_love_btn = get_field( 'homepage_love_btn' ); ?>
                        <?php if ( $homepage_love_btn ) { ?>
                                <a class="btn player-btn desktop-small" href="<?php echo $homepage_love_btn['url']; ?>"><?php echo $homepage_love_btn['title']; ?></a>
                        <?php } ?>
                </div>
            </div>
        </div>
</section>
