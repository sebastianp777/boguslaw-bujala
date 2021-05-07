<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <meta name="msapplication-TileColor" content="#623b29">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:site_name" content="IntegraleIT">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="og:title" content="IntegraleIT"/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content=""/>
    <meta property="og:locale" content="pl_PL">

    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://use.typekit.net/dtd5rfz.css">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> id="scroll-top">

<!-- header -->
<header class="header clear desktop-small" role="banner">
    <div class="nav__wrapper">
        <a href="<?php echo home_url(); ?>" class="nav__logo-link"><img class="nav__logo" src="<?php echo get_template_directory_uri().'/img/logo.svg'; ?>" alt=""></a>
        <span class="nav__wrapper__br"></span>
        <div class="nav__menu">
            <?php echo html5blank_nav(); ?>
        </div>
    </div>
</header>

