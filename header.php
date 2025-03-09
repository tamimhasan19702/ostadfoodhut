<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$ostadlogo = get_theme_mod('ostadfood_logo', get_template_directory_uri() . '/assets/imgs/logo.svg');
$ostadheadertext = get_theme_mod('ostadfood_logo_alt_text', get_bloginfo('name'));

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Devcrud">
    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php

            if (has_nav_menu('primary-menu')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'navbar-nav',
                    'walker' => new Ostadfood_walker_menu(),
                ));
            }
            ?>
            <?php if (!empty($ostadheadertext) && !empty($ostadlogo)): ?>
            <a class="navbar-brand m-auto" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (!empty($ostadlogo)): ?>
                <img src="<?php echo esc_url($ostadlogo); ?>" class="brand-img"
                    alt="<?php echo esc_attr($ostadheadertext); ?>">
                <?php endif; ?>
                <?php if (!empty($ostadheadertext)): ?>
                <span class="brand-txt"><?php echo esc_html($ostadheadertext); ?></span>
                <?php endif; ?>
            </a>
            <?php endif; ?>
            <?php
            if (has_nav_menu('secondary-menu')) {
                wp_nav_menu(array(
                    'theme_location' => 'secondary-menu',
                    'container' => false,
                    'menu_class' => 'navbar-nav',
                    'walker' => new Ostadfood_walker_menu()
                ));
            }
            ?>


        </div>
    </nav>