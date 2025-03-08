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



}
add_action('init', 'kirki_section_ostadfood');