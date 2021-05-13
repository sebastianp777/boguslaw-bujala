<div class="player--div player--div-gb">
    <div class="player-wrapper">
        <div id="player">

            <div id="track">
                <div id="progress">
                </div>
                <span></span>
            </div>

            <div id="controls">
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