<?php


function kirki_panel_ostadfood()
{
    if (class_exists('\Kirki\Panel')) {
        new \Kirki\Panel(
            'kirki-panel-ostadfood',
            [
                'priority' => 10,
                'title' => esc_html__('Ostadfood Theme Options', 'ostadfood'),
                'description' => esc_html__('Ostadfood Description.', 'ostadfood'),
            ]
        );
    }
}
add_action('init', 'kirki_panel_ostadfood');


function kirki_section_ostadfood()
{
    if (class_exists('\Kirki\Section')) {
        new \Kirki\Section(
            'kirki-section-ostadfood-header',
            [
                'title' => esc_html__('Ostadfood Header', 'ostadfood'),
                'panel' => 'kirki-panel-ostadfood',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Image(
            [
                'settings' => 'ostadfood_logo',
                'label' => esc_html__('ostadfood Logo', 'ostadfood'),
                'description' => esc_html__('The saved value will be the URL.', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-header',
                'default' => get_template_directory_uri() . '/assets/imgs/logo.svg',
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_logo_alt_text',
                'label' => esc_html__('Logo Alt', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-header',
                'default' => 'Ostadfood',
            ]
        );
    }


    if (class_exists('\Kirki\Section')) {
        new \Kirki\Section(
            'kirki-section-ostadfood-footer',
            [
                'title' => esc_html__('Ostadfood Footer', 'ostadfood'),
                'panel' => 'kirki-panel-ostadfood',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_footer_email_text',
                'label' => esc_html__('Email Text', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-footer',
                'default' => 'info@ostadfood.com',
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_footer_email_address',
                'label' => esc_html__('Email Address', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-footer',
                'default' => 'info@ostadfood.com',
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_footer_call_us_text',
                'label' => esc_html__('Call Us Text', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-footer',
                'default' => 'CALL US',
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_footer_call_us_number',
                'label' => esc_html__('Call Us Number', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-footer',
                'default' => '(123) 456-7890',
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_footer_find_us_text',
                'label' => esc_html__('Find Us Text', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-footer',
                'default' => 'FIND US',
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_footer_find_us_address',
                'label' => esc_html__('Find Us Address', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-footer',
                'default' => '12345 Fake ST NoWhere AB Country',
            ]
        );

    }


    if (class_exists('\Kirki\Section')) {
        new \Kirki\Section(
            'kirki-section-ostadfood-copyright',
            [
                'title' => esc_html__('Ostadfood Copyright', 'ostadfood'),
                'panel' => 'kirki-panel-ostadfood',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_footer_copy_right_text',
                'label' => esc_html__('Footer Copyright Text', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-copyright',
                'default' => '&copy; 2024 Made with <i class="ti-heart text-danger"></i> By <a href="#">DevCRUD</a>',
                'sanitize_callback' => 'ostadfood_kses',
            ]
        );
    }



}
add_action('init', 'kirki_section_ostadfood');