<?php

function register_custom_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Ostadfood Primary Menu'),
        'secondary-menu' => __('Ostadfood Secondary Menu'),

    ));
}
add_action('after_setup_theme', 'register_custom_menus');


function ostadfood_kses($content = '')
{
    $allowed_html = [

        'span' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'i' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'a' => [
            'class' => [],
            'id' => [],
            'href' => [],
            'style' => [],
            'target' => [],
            'rel' => [],
        ],
        'br' => [
        ],
        'p' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'h1' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'h2' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'h3' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'h4' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'h5' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'h6' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'img' => [
            'src' => [],
            'alt' => [],
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'ul' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'li' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'ol' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'blockquote' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'pre' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'code' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'table' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'tr' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'td' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'th' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'dl' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'dt' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'dd' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'video' => [
            'class' => [],
            'id' => [],
            'style' => [],
            'autoplay' => [],
            'controls' => [],
            'loop' => [],
            'muted' => [],
            'playsinline' => [],
            'preload' => [],
            'src' => [],
            'poster' => [],
            'width' => [],
            'height' => [],
        ],
        'source' => [
            'src' => [],
            'type' => [],
            'media' => [],
            'sizes' => [],
        ],
        'strong' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'b' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'em' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'i' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'div' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'button' => [
            'class' => [],
            'id' => [],
            'style' => [],
        ],
        'input' => [
            'class' => [],
            'id' => [],
            'style' => [],
            'type' => [],
            'name' => [],
            'value' => [],
            'placeholder' => [],
        ],
        'textarea' => [
            'class' => [],
            'id' => [],
            'style' => [],
            'name' => [],
            'placeholder' => [],
        ],
        'select' => [
            'class' => [],
            'id' => [],
            'style' => [],
            'name' => [],
        ],
        'option' => [
            'class' => [],
            'id' => [],
            'style' => [],
            'value' => [],
        ],
        'svg' => [
            'xmlns' => [],
            'fill' => [],
            'viewbox' => [],
            'role' => [],
            'aria-hidden' => [],
            'focusable' => [],
            'height' => [],
            'width' => [],
        ],
        'path' => [
            'd' => [],
            'fill' => [],
        ],
        'iframe' => [
            'src' => [],
            'width' => [],
            'height' => [],
            'frameborder' => [],
            'allowfullscreen' => [],
        ],
        'strong' => [
            'class' => [],
            'id' => [],

        ],
    ];

    return wp_kses($content, $allowed_html);
}


if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_post_fields',
        'title' => 'Post Pricing Field',
        'fields' => array(
            array(
                'key' => 'field_pricing', 
                'label' => 'Pricing', 
                'name' => 'pricing', 
                'type' => 'text', 
                'instructions' => 'Enter the price (e.g., $29.99)',
                'required' => 0, 
                'placeholder' => '$0.00', 
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));
}