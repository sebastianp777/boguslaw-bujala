<?php /* Template Name: Contact*/ get_header(); ?>

<?php $contact_heroimage = get_field('contact_heroimage');
    if ( $contact_heroimage ) :
    $contacturl = wp_get_attachment_image_url($contact_heroimage, 'full');?>
<?php endif; ?>

<div class="contact-hero-image">
    <img src="<?= $contacturl ?>">
</div>
<section class="contact__section">
    <h2>Formularz kontaktowy</h2>
    <?= do_shortcode('[contact-form-7 id="5" title="Formularz 1"]'); ?>
</section>

<?php get_footer(); ?>


