<?php
    /*
    kirki configuration
    */
    Kirki::add_config( 'wptheme_options', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );
    Kirki::add_panel( 'header_settings', array(
        'priority'    => 10,
        'title'       => esc_html__( 'Header Settings', 'kirki' ),
        'description' => esc_html__( 'My panel description', 'kirki' ),
    ) );
    Kirki::add_section( 'header_layout_settings', array(
        'title'          => esc_html__( 'Header Background Settings', 'kirki' ),
        'description'    => esc_html__( 'My section description.', 'kirki' ),
        'panel'          => 'header_settings',
        'priority'       => 160,
    ) );
    Kirki::add_section( 'menu_settings', array(
        'title'          => esc_html__( 'Menu Settings', 'kirki' ),
        'description'    => esc_html__( 'My section description.', 'kirki' ),
        'priority'       => 160,
    ) );
    Kirki::add_section( 'typography_settings', array(
        'title'          => esc_html__( 'Typography', 'kirki' ),
        'description'    => esc_html__( 'My section description.', 'kirki' ),
        'panel'          => 'header_settings',
        'priority'       => 160,
    ) );
    new \Kirki\Field\Background(
        [
            'settings'    => 'background_setting',
            'label'       => esc_html__( 'Menu Background', 'kirki' ),
            'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
            'section'     => 'menu_settings',
            'default'     => [
                'background-color'      => 'rgba(20,20,20,.8)',
                'background-image'      => '',
                'background-repeat'     => 'repeat',
                'background-position'   => 'center center',
                'background-size'       => 'cover',
                'background-attachment' => 'scroll',
            ],
            'transport'   => 'auto',
            'output'      => [
                [
                    'element' => '#header',
                ],
            ],
        ]
    );
    new \Kirki\Field\Background(
        [
            'settings'    => 'background_setting',
            'label'       => esc_html__( 'Background Control', 'kirki' ),
            'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
            'section'     => 'header_layout_settings',
            'default'     => [
                'background-color'      => 'rgba(20,20,20,.8)',
                'background-image'      => '',
                'background-repeat'     => 'repeat',
                'background-position'   => 'center center',
                'background-size'       => 'cover',
                'background-attachment' => 'scroll',
            ],
            'transport'   => 'auto',
            'output'      => [
                [
                    'element' => '#nav',
                ],
            ],
        ]
    );
    new \Kirki\Field\Typography(
        [
            'settings'    => 'heading_settings',
            'label'       => esc_html__( 'Typography Control', 'kirki' ),
            'description' => esc_html__( 'The full set of options.', 'kirki' ),
            'section'     => 'typography_settings',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => 'Roboto',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'color'           => '#333333',
                'font-size'       => '14px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
                'text-transform'  => 'none',
                'text-decoration' => 'none',
                'text-align'      => 'left',
            ],
            'choices' => [
                'fonts' => [
                    'google'   => [ 'popularity', 50 ],
                    'standard' => [
                        'Georgia,Times,"Times New Roman",serif',
                        'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
                    ],
                ],
            ],
            'output'      => [
                [
                    'element' => 'h1,h2,h3',
                ],
            ],
        ]
    );