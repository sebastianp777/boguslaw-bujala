<!-- footer -->

<footer class="footer">
    <div class="container-footer">
        <div class="container-footer__div">
            <h2><?php the_field('footer_heading', 15); ?></h2>
            <div class="row">
                <?php $footer_image = get_field( 'footer_image', 15 );
                if ( $footer_image ) :
                    $imageurl = wp_get_attachment_image_url($footer_image, 'full');?>
                    <img class="lazy lazy-loading" data-src="<?= $imageurl ?>" alt=""/>
                <?php endif;?>
                <div class="footer_text">
                    <?php the_field('footer_text', 15); ?>
                </div>
            </div>
        </div>
        <div class="footer-menu--div">
            <div class="row">
                <span>© 2021</span>
                <?php echo html5blank_nav_footer(); ?>
                <a href="mailto:<?php the_field('footer_email', 15); ?>"><span><?php the_field('footer_email', 15); ?></span></a>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->


<?php wp_footer(); ?>
<?php if (!defined('IS_GOOGLE_SPEED')): ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"/>
<?php endif; ?>
</body>
</html>
