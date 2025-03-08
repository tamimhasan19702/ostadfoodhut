<?php


function kirki_panel_osatdfood()
{
    if (class_exists('\Kirki\Panel')) {
        new \Kirki\Panel(
            'kirki-panel-osatdfood',
            [
                'priority' => 10,
                'title' => esc_html__('osatdfood Theme Options', 'osatdfood'),
                'description' => esc_html__('osatdfood Description.', 'osatdfood'),
            ]
        );
    }
}
add_action('init', 'kirki_panel_osatdfood');


function kirki_section_ostadfood()
{
    if (class_exists('\Kirki\Section')) {
        new \Kirki\Section(
            'kirki-section-ostadfood-header',
            [
                'title' => esc_html__('ostadfood Header', 'ostadfood'),
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
                'default' => get_template_directory_uri() . '/img/logo.png',
            ]
        );
    }


    if (class_exists('\Kirki\Section')) {

        new \Kirki\Section(
            'kirki-section-ostadfood-Footer',
            [
                'title' => esc_html__('ostadfood Footer', 'ostadfood'),
                'panel' => 'kirki-panel-ostadfood',
                'priority' => 12,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'ostadfood_copyright_text',
                'label' => esc_html__('Copyright Text', 'ostadfood'),
                'description' => esc_html__('The saved value will be the URL.', 'ostadfood'),
                'section' => 'kirki-section-ostadfood-Footer',
                'default' => wp_kses(
                    'Copyright &copy; 2018 Company Name

        - Design: <a rel="nofollow" href="http://www.templatemo.com">Template Mo</a>',
                    [
                        'a' => [
                            'href' => []
                        ]

                    ]
                ),
                'default' => 'Copyright  &copy; 2018 ostadfood',
            ]
        );


    }

}
add_action('init', 'kirki_section_ostadfood');