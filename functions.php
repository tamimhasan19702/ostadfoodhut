<?php

if (!defined('ABSPATH')) {
    exit;
}

include_once(get_template_directory() . '/includes/enqueue.php');
include_once(get_template_directory() . '/includes/theme_functionality.php');
include_once(get_template_directory() . '/includes/ostadfood_walker_menu.php');


if (function_exists('Kirki')) {
    include_once(get_template_directory() . '/includes/ostadfood_kirki_customizer.php');
}