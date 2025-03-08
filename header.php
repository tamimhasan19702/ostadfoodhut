<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=<?php echo esc_attr('no'); ?>">
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta name="author" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <title>FoodHut</title>


    <?php wp_head(); ?>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" <?php body_class(); ?>>

    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.html">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Book-Table</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="index.html">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Food Hut</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="components.html" class="btn btn-primary ml-xl-4">Components</a>
                </li>
            </ul>
        </div>
    </nav>